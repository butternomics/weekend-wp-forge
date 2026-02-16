#!/bin/bash

# Backup script to download latest version from live server
# This will sync all files from the server to your local repo

set -e  # Exit on error

echo "🔄 Starting backup from live server..."
echo ""

# Configuration
SERVER="user@404weekend.com"
REMOTE_PATH="~/public_html/wp-content/themes/404-day-weekend"
LOCAL_PATH="/home/user/weekend-wp-forge"

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}Server:${NC} $SERVER"
echo -e "${YELLOW}Remote path:${NC} $REMOTE_PATH"
echo -e "${YELLOW}Local path:${NC} $LOCAL_PATH"
echo ""

# Create a temporary backup directory
BACKUP_DIR="/tmp/404-theme-backup-$(date +%Y%m%d-%H%M%S)"
mkdir -p "$BACKUP_DIR"

echo -e "${GREEN}Step 1:${NC} Downloading files from server..."
echo ""

# Use rsync to download files from server
# Excludes: .git directory, node_modules, and common temp files
rsync -avz --progress \
  --exclude='.git/' \
  --exclude='node_modules/' \
  --exclude='.DS_Store' \
  --exclude='*.swp' \
  --exclude='*.swo' \
  --exclude='.htaccess' \
  --exclude='backup-from-server.sh' \
  "$SERVER:$REMOTE_PATH/" \
  "$BACKUP_DIR/"

echo ""
echo -e "${GREEN}Step 2:${NC} Comparing with local repo..."
echo ""

# Copy files from backup to local repo, preserving git
rsync -av --delete \
  --exclude='.git/' \
  --exclude='backup-from-server.sh' \
  "$BACKUP_DIR/" \
  "$LOCAL_PATH/"

echo ""
echo -e "${GREEN}Step 3:${NC} Checking for changes..."
echo ""

cd "$LOCAL_PATH"

# Check if there are any changes
if [[ -n $(git status -s) ]]; then
    echo -e "${YELLOW}Changes detected!${NC} The following files were updated from the server:"
    echo ""
    git status -s
    echo ""

    read -p "Do you want to commit these changes? (y/n) " -n 1 -r
    echo ""
    if [[ $REPLY =~ ^[Yy]$ ]]; then
        echo ""
        echo -e "${GREEN}Step 4:${NC} Committing changes..."

        git add -A
        git commit -m "Backup from live server - $(date '+%Y-%m-%d %H:%M:%S')

Full backup of all files from live production server.
Ensures local repo matches current production state.

https://claude.ai/code/session_018LrhHyBfxs9WiKBiCwvccd"

        echo ""
        echo -e "${GREEN}Step 5:${NC} Pushing to GitHub..."
        git push -u origin claude/explore-src-directory-RaSVH

        echo ""
        echo -e "${GREEN}✅ Backup complete!${NC} All files have been saved to GitHub."
    else
        echo ""
        echo -e "${YELLOW}Skipped commit.${NC} Files are synced locally but not committed to git."
    fi
else
    echo -e "${GREEN}✅ No changes detected!${NC} Your local repo is already up to date with the server."
fi

# Cleanup
echo ""
echo "Cleaning up temporary files..."
rm -rf "$BACKUP_DIR"

echo ""
echo -e "${GREEN}🎉 Backup process complete!${NC}"
echo ""
echo "Summary:"
echo "- Server files downloaded to local repo"
echo "- Local repo compared with server version"
echo "- Changes committed and pushed to GitHub"
echo ""
