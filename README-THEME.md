# 404 Day Weekend WordPress Theme

A custom WordPress theme for 404 Day Weekend - celebrating Atlanta's culture, creativity, and community.

## 📋 Table of Contents

- [Installation](#installation)
- [Setup Guide](#setup-guide)
- [Managing Events](#managing-events)
- [Managing Partner Events](#managing-partner-events)
- [Managing Blog Posts](#managing-blog-posts)
- [Managing Pages](#managing-pages)
- [Customizing Theme Settings](#customizing-theme-settings)
- [Troubleshooting](#troubleshooting)

---

## 🚀 Installation

### Step 1: Upload the Theme

1. Compress this entire folder into a `.zip` file
2. Log into your WordPress admin dashboard (`yoursite.com/wp-admin`)
3. Go to **Appearance → Themes**
4. Click **Add New** → **Upload Theme**
5. Choose the `.zip` file and click **Install Now**
6. Once installed, click **Activate**

### Step 2: Set Permalinks

1. Go to **Settings → Permalinks**
2. Select **Post name** (recommended for SEO)
3. Click **Save Changes**

---

## 🎯 Setup Guide

### Creating Your Pages

After activating the theme, create these pages:

#### 1. Homepage (Front Page)

1. Go to **Pages → Add New**
2. Title: "Home" (or any name you like)
3. **Do not add any content** - the homepage layout is automatic
4. On the right sidebar, under **Template**, select **Homepage**
5. Click **Publish**
6. Go to **Settings → Reading**
7. Under "Your homepage displays", select **A static page**
8. Set **Homepage** to the page you just created
9. Click **Save Changes**

#### 2. Events Page

1. Go to **Pages → Add New**
2. Title: "Events"
3. **Permalink/Slug**: Make sure it's `events` (lowercase, no spaces)
4. On the right sidebar, under **Template**, select **Events Page**
5. Click **Publish**

#### 3. Parade Page

1. Go to **Pages → Add New**
2. Title: "Parade"
3. **Permalink/Slug**: Make sure it's `parade`
4. On the right sidebar, under **Template**, select **Parade Page**
5. Click **Publish**

#### 4. 404 Fund Page

1. Go to **Pages → Add New**
2. Title: "404 Fund"
3. **Permalink/Slug**: Make sure it's `404-fund`
4. On the right sidebar, under **Template**, select **404 Fund Page**
5. Click **Publish**

#### 5. Blog Page

1. Go to **Pages → Add New**
2. Title: "Blog"
3. **Do not add any content** - blog posts will display automatically
4. Click **Publish**
5. Go to **Settings → Reading**
6. Under "Posts page", select the "Blog" page you just created
7. Click **Save Changes**

### Setting Up Your Menu

1. Go to **Appearance → Menus**
2. Create a new menu called "Primary Menu"
3. Add your pages in this order:
   - Home
   - Events
   - Parade
   - 404 Fund
   - Blog
4. Under **Menu Settings**, check **Primary Menu**
5. Click **Save Menu**

---

## 📅 Managing Events

Events are the main featured events for 404 Day Weekend.

### Adding a New Event

1. Go to **Events → Add New** in the WordPress admin
2. **Enter the Event Title** (e.g., "404 Day Block Party")
3. **Set the Featured Image** (this is your event flyer):
   - Click **Set featured image** on the right sidebar
   - Upload your event flyer image
   - Click **Set featured image**
4. **Fill in Event Details** in the "Event Details" box:
   - **Event Date & Time**: e.g., "Saturday, April 4 • 12:00 PM – 6:00 PM"
   - **Location**: e.g., "Underground Atlanta"
   - **Short Description**: 1-2 sentences about the event
   - **Button Text**: e.g., "BUY TICKETS!" or "GET FREE TICKET!"
   - **Button Link**: The full URL to buy tickets
   - **Flyer Image Alt Text**: Describe the image for SEO (e.g., "404 Day Block Party flyer showing event details")
   - **Display Order**: Enter a number (0 = first, 1 = second, etc.)
5. Click **Publish**

### Editing an Event

1. Go to **Events → All Events**
2. Click on the event you want to edit
3. Make your changes
4. Click **Update**

### Deleting an Event

1. Go to **Events → All Events**
2. Hover over the event you want to delete
3. Click **Trash**

### Important Tips for Events

- **Use high-quality flyer images** (at least 800x1200px)
- **Always fill in the Alt Text** for SEO and accessibility
- **Use the Display Order** to control which events appear first
- **Leave Button Link blank** if you want a disabled button (like "COMING SOON")

---

## 🤝 Managing Partner Events

Partner Events are simpler events hosted by community partners.

### Adding a Partner Event

1. Go to **Partner Events → Add New**
2. **Enter the Event Title** (e.g., "Atlanta Food Festival")
3. **Fill in Partner Event Details**:
   - **Event Date**: e.g., "April 3, 2026"
   - **Event Link**: Full URL to the partner's event page
4. Click **Publish**

Partner Events will automatically display on the Events page under the "Partner Events" section.

---

## 📝 Managing Blog Posts

### Adding a Blog Post

1. Go to **Posts → Add New**
2. **Enter your post title**
3. **Write your content** in the editor
4. **Set a featured image** (optional but recommended):
   - This appears at the top of the post
   - Click **Set featured image** on the right sidebar
5. **Choose a category** on the right sidebar:
   - Click **+ Add New Category** if needed
   - Common categories: Culture, Events, Parade, News
6. **Write an excerpt** (optional):
   - Scroll down to the **Excerpt** box
   - Write a 1-2 sentence summary
   - This appears on the blog listing page
7. Click **Publish**

### Editing a Blog Post

1. Go to **Posts → All Posts**
2. Click on the post you want to edit
3. Make your changes
4. Click **Update**

---

## 📄 Managing Pages

### Editing the Fund Page Stats

The Fund page shows statistics like "100K+ Total Attendees". To update these:

1. Go to **Appearance → Customize**
2. You'll see various theme settings (coming in next update)
3. For now, to edit the Fund page content:
   - Go to **Pages → All Pages**
   - Find "404 Fund" and click **Edit**
   - The stats are in the page template code

**Note**: For easier stat editing, consider installing the **Advanced Custom Fields** (ACF) plugin (free).

### Editing Other Pages

Regular pages can be edited like any WordPress page:

1. Go to **Pages → All Pages**
2. Click the page you want to edit
3. Make your changes in the editor
4. Click **Update**

---

## 🎨 Customizing Theme Settings

### Changing Social Media Links

1. Go to **Appearance → Customize**
2. Look for theme options
3. Enter your social media URLs:
   - Instagram URL
   - Twitter URL
   - Facebook URL
4. Click **Publish**

**Note**: If Customizer options aren't visible yet, you can edit them directly in the footer.php file or install the **Customizer** plugin.

### ✅ All Images Are Already Included!

**Important**: All 27 images are already included in the theme (11MB total). You don't need to upload anything! When you install the theme, you get:

- ✅ All event flyer images (6 flyers)
- ✅ All logos (main, 404 Fund, parade, partners)
- ✅ Hero background image
- ✅ Parade route map
- ✅ All sponsor/partner logos
- ✅ 404 Lager product image

The theme is **completely ready to use** with all images in place.

### Replacing Images (Optional)

Only if you want to replace an existing image:

1. Go to **Media → Library**
2. Upload your new image with the **same filename**
3. WordPress will automatically use the new image

**Key Image Filenames**:
- `logo-main.png` - Main site logo
- `hero-bg.jpg` - Homepage hero background
- `logo-404fund.webp` - 404 Fund logo
- `parade-map.jpg` - Parade route map
- `partner-logos.png` - Partner organizations banner

---

## 🆘 Troubleshooting

### Events aren't showing up

1. Make sure you've created events under **Events → Add New**
2. Check that they're **Published** (not drafts)
3. Make sure you've added a **Display Order** number to each event

### Menu isn't working

1. Go to **Appearance → Menus**
2. Make sure your menu is assigned to **Primary Menu** location
3. Click **Save Menu**

### Images aren't displaying

1. Check that image files exist in **Media → Library**
2. Make sure filenames match exactly (case-sensitive)
3. Try re-uploading the images

### Mobile menu isn't working

1. Clear your browser cache
2. Make sure JavaScript is enabled
3. Check that the theme is properly activated

### Pages show wrong template

1. Edit the page
2. On the right sidebar, check **Template** dropdown
3. Select the correct template
4. Click **Update**

---

## 📚 Additional Resources

### Recommended (Free) Plugins

- **Yoast SEO** - Helps with search engine optimization
- **WP Super Cache** - Makes your site faster
- **Contact Form 7** - Add contact forms
- **Advanced Custom Fields** - Easier custom field management

### Need Help?

- **WordPress Support**: [wordpress.org/support](https://wordpress.org/support/)
- **Theme Documentation**: Check this README file

---

## 🎉 Quick Start Checklist

**Note**: All images are already included - no need to upload anything!

- [ ] Theme installed and activated (all 27 images included automatically)
- [ ] Permalinks set to "Post name"
- [ ] Created Homepage (with Homepage template)
- [ ] Created Events page (with Events Page template)
- [ ] Created Parade page (with Parade Page template)
- [ ] Created 404 Fund page (with 404 Fund Page template)
- [ ] Created Blog page
- [ ] Set static front page in Settings → Reading
- [ ] Created primary menu with all pages
- [ ] Added at least 3-4 events (can use existing flyer images!)
- [ ] Created first blog post
- [ ] Tested on mobile device

---

## ✨ Best Practices

1. **Always use high-quality images** - They make your site look professional
2. **Fill in alt text for all images** - Important for SEO and accessibility
3. **Keep event descriptions concise** - 1-2 sentences is perfect
4. **Update events regularly** - Remove old events, add new ones
5. **Test on mobile** - Most visitors will be on phones
6. **Back up regularly** - Use a plugin like UpdraftPlus (free)

---

## 📧 Support

For questions about this theme, contact the development team or refer to WordPress documentation at [wordpress.org](https://wordpress.org).

**Version**: 1.0.0
**Last Updated**: February 2026
