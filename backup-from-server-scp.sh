#!/bin/bash

# Backup script using SCP and TAR (no rsync required)
# Downloads latest version from live server

set -e  # Exit on error

echo "🔄 Starting backup from live server..."
echo ""

# Configuration
SERVER="user@404weekend.com"
REMOTE_PATH="~/public_html/wp-content/themes/404-day-weekend"
LOCAL_PATH="/home/user/weekend-wp-forge"
TIMESTAMP=$(date +%Y%m%d-%H%M%S)
BACKUP_FILE="404-theme-backup-${TIMESTAMP}.tar.gz"

echo "📦 Creating archive on server..."
echo ""

# Create tar archive on the server (excluding .git)
ssh "$SERVER" "cd $REMOTE_PATH && tar -czf /tmp/$BACKUP_FILE \
  --exclude='.git' \
  --exclude='node_modules' \
  --exclude='.DS_Store' \
  --exclude='*.swp' \
  --exclude='*.swo' \
  --exclude='.htaccess' \
  ."

echo ""
echo "⬇️  Downloading archive from server..."
echo ""

# Download the archive
scp "$SERVER:/tmp/$BACKUP_FILE" "/tmp/$BACKUP_FILE"

echo ""
echo "🧹 Cleaning up server..."
echo ""

# Remove the archive from the server
ssh "$SERVER" "rm -f /tmp/$BACKUP_FILE"

echo ""
echo "📂 Extracting archive..."
echo ""

# Extract to temporary directory
TEMP_DIR="/tmp/404-theme-extract-${TIMESTAMP}"
mkdir -p "$TEMP_DIR"
tar -xzf "/tmp/$BACKUP_FILE" -C "$TEMP_DIR"

echo ""
echo "🔄 Syncing files to local repo..."
echo ""

# Copy files to local repo (excluding .git and backup script)
cd "$TEMP_DIR"
find . -type f ! -path './.git/*' ! -name 'backup-from-server*.sh' -exec cp --parents {} "$LOCAL_PATH/" \;

echo ""
echo "✅ Files synced! Checking for changes..."
echo ""

cd "$LOCAL_PATH"

# Check for changes
if [[ -n $(git status -s) ]]; then
    echo "📝 Changes detected:"
    echo ""
    git status -s
    echo ""

    echo "💾 Committing changes..."
    git add -A
    git commit -m "Backup from live server - $(date '+%Y-%m-%d %H:%M:%S')

Full backup of all files from live production server.
Ensures local repo matches current production state.

https://claude.ai/code/session_018LrhHyBfxs9WiKBiCwvccd"

    echo ""
    echo "⬆️  Pushing to GitHub..."
    git push -u origin claude/explore-src-directory-RaSVH

    echo ""
    echo "✅ Backup complete and pushed to GitHub!"
else
    echo "✅ No changes detected! Your local repo is already up to date."
fi

# Cleanup
echo ""
echo "🧹 Cleaning up temporary files..."
rm -rf "$TEMP_DIR"
rm -f "/tmp/$BACKUP_FILE"

echo ""
echo "🎉 Backup process complete!"
echo ""
