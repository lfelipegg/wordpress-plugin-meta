# wordpress-plugin-meta
A plugin to add meta description and keywords to the page, it requires SCF or ACF plugin.

Step 1: Create the Plugin File

    Go to your WordPress installation directory.
    Navigate to the wp-content/plugins folder.
    Create a new folder for your plugin, e.g., custom-meta-plugin.
    Inside that folder, add the file named custom-meta-plugin.php.

Step 3: Install and Activate the Plugin

    Go to your WordPress admin dashboard.
    Navigate to Plugins > Add New.
    Click Upload Plugin and upload the custom-meta-plugin.zip file if you zipped it, or simply copy the folder into the plugins directory.
    Activate the plugin.

Step 4: Add Custom Fields to Your Pages/Posts

    Edit the page or post where you want to add the meta tags.
    Add a custom field named meta-description for the meta description.
    Add a custom field named meta-palabras for the meta keywords.
    Save the page/post.

How It Works:

    The plugin hooks into the wp_head action, which outputs content into the <head> section of your WordPress theme.
    It checks if the current page is a singular post or page using is_singular().
    It retrieves the values of the custom fields meta-description and meta-palabras using get_post_meta().
    If the fields are not empty, it outputs <meta> tags for the description and keywords.

Example Output in <head>:

If you set the custom fields:

    meta-description: "This is a custom meta description."
    meta-palabras: "WordPress, plugin, meta tags"

The resulting HTML in the page’s <head> would look like this:
<meta name="description" content="This is a custom meta description.">
<meta name="keywords" content="WordPress, plugin, meta tags">


Make sure your theme doesn't already output duplicate meta descriptions or keywords to avoid conflicts.
