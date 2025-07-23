# Google Maps API Setup Guide for Arfan Express

## Step 1: Get Google Maps API Key

1. **Go to Google Cloud Console**: https://console.cloud.google.com/
2. **Create a new project** or select existing project
3. **Enable APIs**:
   - Go to "APIs & Services" > "Library"
   - Search for "Maps JavaScript API"
   - Click "ENABLE"
4. **Create API Key**:
   - Go to "APIs & Services" > "Credentials"
   - Click "Create Credentials" > "API Key"
   - Copy your API key

## Step 2: Secure Your API Key (Important!)

1. **Restrict the API Key**:
   - Click on your API key in the credentials page
   - Under "Application restrictions", select "HTTP referrers"
   - Add your website domains:
     - `https://yourdomain.com/*`
     - `https://www.yourdomain.com/*`
     - `http://localhost:*` (for development)

## Step 3: Add API Key to Your Website

1. **Open the file**: `resources/js/components/common/OfficeMap.vue`
2. **Find this line**: `const GOOGLE_MAPS_API_KEY = '';`
3. **Add your API key**: `const GOOGLE_MAPS_API_KEY = 'YOUR_API_KEY_HERE';`

## Step 4: Test Your Map

1. **Start your development server**: `npm run dev`
2. **Visit the Contact page**
3. **You should see**: Interactive Google Maps with your office locations

## Alternative: Simple Embed (No API Key Required)

If you don't want to use an API key, the map will automatically show a "Use Simple Map Instead" button that displays a basic Google Maps embed.

## Your Office Locations

The map will show these locations:
- **Dhaka Corporate Office**: Azhar Comfort Complex, Gulshan-01
- **Chittagong Office**: Faruk Chamber, Agrabad
- **Khulna Office**: Dr. Rahman Plaza, KDA Avenue

## Features Available

✅ **Interactive markers** - Click to switch between offices
✅ **Info windows** - Show office details and contact options  
✅ **Google Maps integration** - Direct links to maps and directions
✅ **Zoom and pan** - Full map controls
✅ **Street View** - Available on all locations
✅ **Mobile responsive** - Works on all devices

## Troubleshooting

**Map not loading?**
- Check if API key is correct
- Verify domain restrictions
- Check browser console for errors

**API Key errors?**
- Make sure Maps JavaScript API is enabled
- Check API key restrictions
- Verify billing is set up (Google requires billing info)

**Need help?**
Contact your web developer or Google Cloud support. 