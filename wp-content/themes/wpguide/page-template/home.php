<?php
/**
 * Template Name: Home Page
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();?>

    <div class="section-home section-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="wp-guides-sidebar">
                        <ul class="sidebar-menu">
                            <li>
                                <a href="#welcome">Welcome</a>
                            </li>
                            <li>
                                <a href="#intro">Introduction to Wordpress</a>
                            </li>
                            <li>
                                <a href="#login">Logging In</a>
                            </li>
                            <li>
                                <a href="#wp-dashboard">Wordpress Dashboard</a>
                                <ul>
                                    <li>
                                        <a href="#dashboard-menu">Dashboard Menu Options</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#toolbar">Toolbar</a>
                                <ul>
                                    <li>
                                        <a href="#hiding-toolbar">Hiding the Toolbar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#posts-pages">Posts and Pages</a>
                                <ul>
                                    <li>
                                        <a href="#posts">Posts</a>
                                    </li>
                                    <li>
                                        <a href="#pages">Pages</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#site-content">Adding Site Content</a>
                                <ul>
                                    <li>
                                        <a href="#new-page">Adding a New Page</a>
                                    </li>
                                    <li>
                                        <a href="#new-posts">Adding a New Posts</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="sidebar-content">
                        <div class="sidebar-list-content" id="welcome">
                            <h1>Welcome</h1>
                            <p>Congratulations on your new website!</p>
                            <p>You’re now one step closer to building a stronger web presence for your business.  Now, it’s time for you to fill your site with all the content needed to attract potential customers and keep your existing customers updated on your latest events and products.</p>
                            <p>The question is HOW?</p>
                            <p>We created this manual to help you with that!</p>
                            <p>This WordPress Manual is a simple guide that is meant to give you an overall understanding of how to use the various features within your WordPress dashboard to help you in keeping your website updated.</p>
                            <p>We have cut things down to the basic elements that will help you keep your website up and running.  In order to do this, we have avoided very technical topics (such as developing your own WordPress theme or modifying site with plugins), because these are things that are better left in the hands of your web developer.</p>
                            <p>Our main goal is to help you keep things going and continue to push your business further with your new website.<p>
                        </div>
                        <div class="sidebar-list-content" id="intro">
                            <h1>Introduction to Wordpress</h1>
                            <p>
                                WordPress is an <a href="https://en.wikipedia.org/wiki/Open_source">Open Source</a> software system used by millions of people around the world to create beautiful websites and blogs. It is completely customisable by the use of <a href="https://wordpress.org/themes/">themes</a> and <a href="https://wordpress.org/plugins/">plugins</a>.</p>
                            <blockquote>
                                <p>
                                    “WordPress is web software you can use to create a beautiful website or blog. We like to say that WordPress is both free and priceless at the same time.”
                                </p>
                            </blockquote>
                            <p>Themes can be easily downloaded from the official WordPress site or from hundreds of other places around the web. The same goes with plugins, which are used to extend the functionality of your WordPress site.</p>
                            <p>As well as being a fantastic blogging and content management system, one of the huge benefits is the wealth of information out there. There’s a great community of people behind the design & development of the WordPress system itself. People from all over the world contribute their time, knowledge and skill to keeping WordPress updated and secure.</p>
                            <p>There’s also a huge number of designers, developers & bloggers who share their knowledge through blog posts, tutorials, reviews, videos and the creation of thousands of themes & plugins.</p>
                        </div>
                        <div class="sidebar-list-content" id="login">
                            <h1>Logging In</h1>
                            <p>
                                Before you can make any changes to your website, you will need to log in to the administration dashboard or area.  The login for your site is typically found by adding: /wp-admin at the end of your domain.
                            </p>
                            <p>
                                The domain of your website is <a href="http://generalsportssurfaces.com">http://generalsportssurfaces.com</a>
                            </p>
                            <p>
                                To log into your CMS, you will need to type in this URL on the address bar of your browser:
                                <a href="http://generalsportssurfaces.com/wp-admin">http://generalsportssurfaces.com/wp-admin</a>
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/login.jpg" alt="">
                            </p>
                            <p>The default login credentials we have assigned to you is as follows:</p>
                            <div class="credentials">
                                <span><strong>USERNAME:</strong> generalsports.admin</span>
                                <span><strong>PASSWORD:</strong> UAm9!7lMoBrOu(cfJr@2x&(f</span>
                            </div>
                            <p>
                                You can change the password of your account in the Profile section of your WordPress Dashboard.  More information on how to do this may be found here.
                            </p>
                        </div>
                        <div class="sidebar-list-content" id="wp-dashboard">
                            <h1>Wordpress Dashboard</h1>
                            <p>
                                Once you’ve logged in, you will be directed to your WordPress Dashboard.  This is where you will all of the options and menus where you can manage the different parts of your website.
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dashboard.jpg" alt="">
                            </p>
                            <div class="sidebar-list-child-content">
                                <h3>Current User</h3>
                                <p>
                                    At the top of your Dashboard, you will see the name of the person who is currently logged in or which account you are using.  In the screenshot above, it displays your username: <strong>GeneralSports.admin</strong>, since this is the account you have used to log in.
                                </p>

                                <p>
                                    If you move your cursor over the name, a fly-out menu will appear with the options to Log Out or Edit Your Profile.
                                </p>
                            </div>
                            <div class="sidebar-list-child-content">
                                <h3>New Feature: Toolbar</h3>
                                <p>
                                    When new or updated features are introduced into WordPress, you’ll be shown a <strong>New Feature Pointer</strong>. This is simply to bring to your attention some feature within the Dashboard that’s been added or updated. In the following Dashboard image, the New Feature Pointer is highlighting the updated Toolbar. You can click Dismiss to hide the pointer.
                                </p>

                                <p>
                                    On most pages, just below your Username there are a couple of small inverted tabs. One called Screen Options and another called Help. Clicking either of these links will cause a panel to slide down from the top of the page. The Help link, not surprisingly, displays some help information. The Screen Options link will display various options that allow you to configure what is displayed on the current page. The details in this panel change depending on what page you’re currently viewing. As an example, on your main Dashboard page the Screen Options allow you to set which panels you’d like displayed on the page.
                                </p>
                            </div>
                        </div>
                        <div class="sidebar-list-content" id="dashboard-menu">
                            <h1>Dashboard Menu Options</h1>
                            <p>
                                Down the left-hand side of the Dashboard and on every page you will see your main navigation menu. This is where you’ll find all the options to update and configure your site.
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dashboard-menu.png" alt="">
                            </p>
                            <p>Hovering your cursor over each of the main menu options will display a ‘fly-out’ menu with the various choices for that particular menu option. Once you click each of the main menu options, that particular menu will expand to show all the available options within that section (if there are any).</p>
                            <p>
                                Below is a brief overview of each main menu options and their usage:
                            </p>
                            <table class="table table-bordered table-custom">
                                <tbody>
                                <tr>
                                    <th><strong>Menu</strong></th>
                                    <th><strong>Usage</strong></th>
                                </tr>
                                <tr>
                                    <td><strong>Dashboard</strong></td>
                                    <td>
                                        This will display your main Dashboard ‘homepage’. In the top left of your Dashboard you’ll see some brief stats on the number of Posts, Pages, Categories and Tags contained within your site, as well as the total number of comments and approved comments. There’s also a summary of how many Spam Comments you currently have.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Posts</strong></td>
                                    <td>
                                        This is where you can create a new Blog Post. You can also update your Categories and Post Tags.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Media</strong></td>
                                    <td>
                                        This is where all your uploaded images, documents or files are stored. You can browse through your Media library, as well as edit and update the files.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Pages</strong></td>
                                    <td>This is where you create and maintain all your Pages</td>
                                </tr>
                                <tr>
                                    <td><strong>Comments</strong></td>
                                    <td>You can manage all the comments made to your pages/posts in this area.  This includes replying to the comments, deleting them or marking them as spam.</td>
                                </tr>
                                <tr>
                                    <td><strong>Plugins</strong></td>
                                    <td>
                                        Plugins allow you to extend and expand the functionality of your WordPress site.  This area will allow you to add, update or delete plugins, as well as activating and deactivating the ones you currently have installed.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Users</strong></td>
                                    <td>
                                        You can manage the users (or people who have access to your site) here.  Only administrators can add or manage the permissions of the users on the site.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Tools</strong></td>
                                    <td>
                                        This section gives you access to the various tools that you will find useful in your website.  Here you can also import or export data all your WordPress data.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Settings</strong></td>
                                    <td>
                                        This area contains your basic website configuration or settings.  Here you can change the site name and URL, where your Posts appear, whether people can leave Post Comments or not and numerous settings that will help you customize your website further.
                                        <p>Since your website has been set-up for you, there is no need to change any of the settings within this setting.  It is also best if you leave it to your web developer.</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p>
                                At the bottom of the menu is a link titled: Collapse Menu.  Clicking this will simply hide the menu and display their icons instead.
                            </p>
                            <p>
                                Plugins usually have their own configuration or setup pages, these menus normally appear within the Tools section, the Settings section or in a completely new menu section that you will also find in this area of your WordPress dashboard.
                            </p>
                        </div>
                        <div class="sidebar-list-content" id="toolbar">
                            <h1>Toolbar</h1>
                            <p>
                                The WordPress Toolbar is a way of easily accessing some of the most common WordPress features. When you are logged into your WordPress dashboard and you visit your website, you will see the Toolbar running across the top of your site.
                            </p>
                            <p>
                                NOTE: This bar only appears if you are currently logged into your WordPress site, which means that it won’t be visible to your everyday site visitors. If you are not logged in, the Toolbar won’t be displayed.
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/toolbar.png" alt="">
                            </p>
                            <p>The Toolbar allows you to quickly access the following commonly used features:</p>
                            <ul class="featured-list">
                                <li>
                                    <p>Visit the WordPress.org website, Codex or Support forums</p>
                                </li>
                                <li>
                                    <p>Display your site Dashboard and other commonly used menu options that allow you to update your site Themes, Widgets and Menus</p>
                                </li>
                                <li>
                                    <p>
                                        Visit the Customizer to update various site settings and depending on your theme, update your Background and Header images
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        View or Edit your blog comments
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Add a new Post, Media, Page or User
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Perform a site Search
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        View or Edit your Profile and logout from the WordPress Dashboard
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-list-content" id="hiding-toolbar">
                            <h1>Hiding the Toolbar</h1>
                            <p>
                                You can stop the Toolbar from displaying by modifying the preferences associated with your Profile.
                            </p>
                            <ul class="featured-list featured-number">
                                <li>
                                    <p>
                                        Simply click on the Users link in the left-hand navigation to display the list of Users.
                                    </p>
                                </li>
                                <li>
                                    <p>From this list of Users, click your user name or click on the Edit link that appears beneath the user name when hovering your cursor over each row.</p>
                                    <p>Alternatively, you can also do this by clicking on the Your Profile link underneath the Users menu option in the left-hand navigation or within the fly-out menu.</p>
                                </li>
                                <li>
                                    <p>
                                        When editing your Profile there is a Toolbar option as shown in the screen above.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Show Toolbar when viewing site – Checking this box will display the Toolbar at the very top of your website (only for the person who is currently logged in)
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-list-content" id="posts-pages">
                            <h1>Posts and Pages: What’s the difference?</h1>
                            <p>
                                WordPress is built around two basic concepts: Posts and Pages.
                            </p>
                            <table class="table table-bordered table-custom">
                                <tbody>
                                <tr>
                                    <th><strong>Posts</strong></th>
                                    <th><strong>Pages</strong></th>
                                </tr>
                                <tr>
                                    <td>A series of articles, which are usually listed reverse-chronologically</td>
                                    <td>
                                        Used for Static Content (i.e. content that doesn’t change or need to be changed frequently).
                                    </td>
                                </tr>
                                <tr>
                                    <td>Example: Blog Posts</td>
                                    <td>Example: “About Us” page</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="sidebar-list-child-content">
                                <h3><strong>Do I need a blog?</strong></h3>
                                <p>
                                    Now, you might be thinking, “but I don’t need a blog”. This might be true, but you can also use the blog concept if you have a site where you need to display your ‘latest news’ or even just company updates.
                                </p>
                                <p>
                                    Basically, any information that gets updated on a semi-regular basis can benefit from the ‘blog’ functionality. Whether that’s a traditional blog, your company’s ‘latest news’ or even just your own personal updates.
                                </p>
                            </div>
                        </div>
                        <div class="sidebar-list-content" id="posts">
                            <h1>Posts</h1>
                            <p>
                                Once you click on the Posts menu option, you will see a list of Posts that are on your site.  These posts are displayed according to the: Post title, Author, Categories, Tags, No. of Comments, etc.
                            </p>
                            <p>
                                This is how the Posts section appears on your website:
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/posts.png" alt="">
                            </p>
                            <p>
                                At the top of the page (as seen in box #1 in the image above), you can view the following:
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <p>
                                        All - the total number of Posts you have in your site
                                    </p>
                                </li>
                                <li>
                                    <p>Published – Posts that are viewable by the public</p>
                                </li>
                                <li>
                                    <p>
                                        Mine – Posts that were published using your User account.
                                    </p>
                                </li>
                            </ul>
                            <p>
                                When hovering your cursor over each row, a few links will appear beneath the Post title (box #2 in the image above):
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <p>
                                        Edit – Will allow you to edit your Post. This is the same as clicking on the Post title
                                    </p>
                                </li>
                                <li>
                                    <p>Quick Edit – Allows you to edit basic Post information such as Title, Slug, Date plus a few other options</p>
                                </li>
                                <li>
                                    <p>
                                        Trash – Will send the Post to the Trash. Once the Trash is emptied, the page is deleted
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        View – Displays the Post. If the Post hasn’t been published yet, this will say Preview
                                    </p>
                                </li>
                            </ul>
                            <p>
                                Next to each Post Title, you will see a checkbox (box #3 in the image above).  This allows you to perform an action on multiple items at once.  You simply check the Posts that you would like to affect and then from the Bulk Actions dropdown select either the Edit option or the Move to Trash option and then click the Apply button.
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <p>
                                        Edit – Allows you to edit the Categories, Tags, Author, whether to allow Comments and Pings or not, the Status and whether or not the Posts are ‘Sticky’.
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Move to Trash – Moves the selected items to the Trash.
                                    </p>
                                </li>
                            </ul>
                            <p>
                                You can also filter the pages that are displayed using the dropdown lists and the Filter button.
                            </p>
                            <p>
                                Clicking the Screen Options button at the top-right of the screen allows you to change how the Posts list is displayed. Click the List View option to display the posts in the traditional List View or click the Excerpt View option to display a short excerpt from the Post underneath the Post title. You can also hide various columns from view if you don’t want to see them. Clicking the Apply button will save your changes.
                            </p>
                        </div>
                        <div class="sidebar-list-content" id="pages">
                            <h1>Pages</h1>
                            <p>
                                The Pages menu option will show you all the Pages contained in your website.
                            </p>
                            <p>
                                The Pages are displayed according to the: Page title, Author, No. of Comments, etc.  This is how the Pages section appears on your website:
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pages.png" alt="">
                            </p>
                            <p>
                                Just like the Posts page, the top of the Page will allow you to view:
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <p>
                                        All – the total number of Pages on your website
                                    </p>
                                </li>
                                <li>
                                    <p>Mine – the Pages you published using your User Account</p>
                                </li>
                                <li>
                                    <p>
                                        Published – the Pages that are currently Published on the website
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Trash – the Pages you have moved to Trash
                                    </p>
                                </li>
                            </ul>
                            <p>
                                Hovering your cursor over each row, will reveal the following links beneath the Page Title:
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <p>
                                        Edit – Will allow you to edit your Page. This is the same as clicking on the Page title
                                    </p>
                                </li>
                                <li>
                                    <p>Quick Edit – Allows you to edit basic Page information such as Title, Slug, Date plus a few other options</p>
                                </li>
                                <li>
                                    <p>
                                        Trash – Will send the Page to the Trash. Once the Trash is emptied, the page is deleted
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        View – Displays the Page. If the Page hasn’t been published yet, this will say Preview
                                    </p>
                                </li>
                            </ul>
                            <p>
                                Next to each Page title is a checkbox. This allows you to perform an action on multiple items at once. You simply check the Pages that you would like to affect and then from the Bulk Actions dropdown select either the Edit option or the Move to Trash option and then click the Apply button. The Edit option will allow you to edit the Author, Parent, Template, whether to allow Comments or not and the Status of each of the checked items. The Move to Trash option will move the selected items to the Trash.
                            </p>
                            <p>
                                You can also filter the pages that are displayed using the dropdown list and the Filter button.

                            </p>
                        </div>
                        <div class="sidebar-list-content" id="site-content">
                            <h1>Adding your Site Content</h1>
                            <p>
                                Adding content to your site is an easy process no matter whether you’re creating a Post or a Page.  The procedure for both is almost identical.  Apart from how they display on your site, which was described earlier, the other main difference is that Posts allow you to associate Categories and Tags whereas Pages don’t.
                            </p>
                            <p>
                                <strong>What’s the difference between categories and tags?</strong>
                            </p>
                            <table class="table table-bordered table-custom">
                                <tbody>
                                <tr>
                                    <th><strong>Categories</strong></th>
                                    <th><strong>Tags</strong></th>
                                </tr>
                                <tr>
                                    <td>Pre-determined section</td>
                                    <td>
                                        Ad-hoc keywords that identify important information in your Post (names, subjects, etc.)
                                    </td>
                                </tr>
                                <tr>
                                    <td>Like the Table of Contents of a book</td>
                                    <td>Like the terms in the index of a book</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="sidebar-list-content" id="new-page">
                            <h1>Adding a New Page</h1>
                            <p>
                                There are several ways that you can add a new Page to your website.
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-page.png" alt="">
                            </p>
                            <ol class="featured-list featured-number">
                                <li>
                                    <p>Toolbar</p>
                                    <p>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-page-toolbar.png" alt="">
                                    </p>

                                    <p>At the top of your screen, click on + NEW (highlighted in red in the image above).  This will open up a menu.  Click on Page and this will bring you to the Add New Page screen.</p>
                                </li>
                                <li>
                                    <p>Navigation Menu</p>
                                    <p>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav-menu.png" alt="">
                                    </p>
                                    <p>
                                        Hover over Pages on the Navigation Menu or click on it to show the sub-menu.  Click on Add New.
                                    </p>
                                </li>
                                <li>
                                    <p>Pages Screen</p>
                                    <p>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page-screen.png" alt="">
                                    </p>
                                    <p>
                                        Click on Pages on the Navigation Menu and it will bring up the main Pages screen.  Click on the Add New button beside the word Pages at the top.
                                    </p>
                                </li>
                            </ol>
                            <p>
                                Once you are in the Add New Page screen, this is how the page will look like:
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page-screen-new.png" alt="">
                            </p>
                        </div>
                        <div class="sidebar-list-content" id="new-posts">
                            <h1>Adding a New Post</h1>
                            <p>
                                Adding a new Post is practically the same as adding a new Page.  You can do it through the Toolbar, Navigation Menu and Posts page:
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-posts.png" alt="">
                            </p>
                            <ol class="featured-list featured-number">
                                <li>
                                    <p>Toolbar</p>
                                    <p>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/posts-toolbar.png" alt="">
                                    </p>

                                    <p>At the top of your screen, click on + NEW.  This will open up a menu.  Click on Page and this will bring you to the Add New Posts screen.</p>
                                </li>
                                <li>
                                    <p>Navigation Menu</p>
                                    <p>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/posts-nav.png" alt="">
                                    </p>
                                    <p>
                                        Hover over Posts on the Navigation Menu or click on it to show the sub-menu.  Click on Add New.
                                    </p>
                                </li>
                                <li>
                                    <p>Posts Screen</p>
                                    <p>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/posts-screen.png" alt="">
                                    </p>
                                    <p>
                                        Click on Posts on the Navigation Menu and it will bring up the main Posts screen.  Click on the Add New button beside the word Posts at the top.
                                    </p>
                                </li>
                            </ol>
                            <p>
                                Once you are in the Add New Post screen, this is how the page will look like:
                            </p>
                            <p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/posts-screen-new.png" alt="">
                            </p>
                        </div>
                        <div class="sidebar-list-content" id="visual-editor">
                            <h1>Adding Content with the Visual Editor</h1>
                            <p>
                                The editor used to enter content into your Page or Post is very easy to use. It’s much like using a regular word processor, with toolbar buttons that allow you to Bold ( <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/bold.jpg" alt=""> ) or Italicize ( <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/italic.jpg" alt=""> ) text or enter in Headings ( <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/paragraph.jpg" alt=""> ) or bullet points ( <img
                                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/text-align.jpg" alt=""> ).
                            </p>
                            <p>
                                You can even use most of the basic keyboard shortcuts used in other text editors.
                                For example:
                            </p>
                            <ul class="featured-list">
                                <li>
                                    <p>Shift+Enter inserts a line break</p>
                                </li>
                                <li>
                                    <p>Ctrl+C/Cmd+C = copy</p>
                                </li>
                                <li>
                                    <p>Ctrl+X/Cmd+X = cut</p>
                                </li>
                                <li>
                                    <p>Ctrl+Z/Cmd+Z = undo</p>
                                </li>
                                <li>
                                    <p>Ctrl+Y/Cmd+Y = redo</p>
                                </li>
                                <li>
                                    <p>Ctrl+A/Cmd+A = select all</p>
                                </li>
                                <p>NOTE: Use the Ctrl key on a PC or the Command key on a Mac</p>
                            </ul>
                            <p>
                                When adding content to your page, the Visual Editor expands to fit your content, rather than simply scrolling. On top of that, no matter how tall the Visual Editor becomes, the toolbar buttons will be available at all times by sticking to the top of the page.
                            </p>
                            <p>
                                By making use of special keyboard shortcuts, adding content is now even easier. When you want to add different size headings to your content, rather than having to select the heading size from the toolbar dropdown you can now start a line with two or more hashtags (#) and once you hit Enter to go to the next line, the Visual Editor will automatically convert your text to the appropriate heading. Like headings, you can also use * or - to create an unordered list, using 1. will start an ordered list, and > will create a blockquote.
                            </p>
                            <p>
                                The complete list of keyboard shortcuts available are as follows;
                            </p>
                            <ul class="featured-list list-unstyled">
                                <li>
                                    <p>* – Start an unordered list</p>
                                </li>
                                <li>
                                    <p>- – Start an unordered list</p>
                                </li>
                                <li>
                                    <p>1. – Start an ordered list</p>
                                </li>
                                <li>
                                    <p>1) – Start an unordered list</p>
                                </li>
                                <li>
                                    <p>## – H2</p>
                                </li>
                                <li>
                                    <p>### – H3</p>
                                </li>
                                <li>
                                    <p>#### – H4</p>
                                </li>
                                <li>
                                    <p>##### – H5</p>
                                </li>
                                <li>
                                    <p>###### – H6</p>
                                </li>
                                <li>
                                    <p>> – Add a blockquote</p>
                                </li>
                                <li>
                                    <p>--- – Add a horizontal line</p>
                                </li>
                                <li>
                                    <p>`..` – Convert text into code block (replace .. with your text)</p>
                                </li>
                            </ul>
                            <p>At the top of the editor there are two tabs, Visual and Text ( <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/visual.jpg" alt=""> ). These switch the editor view between the Visual Editor and the Text editor. The Text view will enable you to view the HTML code that makes up your content. For the more experienced users this can be helpful at times but for those not familiar with HTML tags, it’s not recommended.</p>
                            <p>
                                When creating a new Page or Post, the first thing to do is enter in your title in the top entry field where it says Enter title here. After moving the cursor down to the editor a new Permalink is created for your page. Permalinks are the permanent URL’s to your individual Posts, Pages, Categories etc.. Though not usually necessary, you can manually edit your permalink by clicking on the actual permalink (the part after the domain name with the yellow background) or by clicking the Edit button next to it. Once you’ve modified it, click Ok to save or Cancel to cancel your changes.
                            </p>
                            <p>At the top of the editor where your content is written, there are numerous formatting buttons.</p>
                            <p>
                                Clicking the Toolbar Toggle button ( <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/toogle.jpg" alt=""> ) will show or hide a second line of formatting buttons which gives you extra functionality. The editor buttons perform the following functions:
                            </p>
                            <table class="table table-bordered table-custom">
                                <tbody>
                                <tr>
                                    <th><strong>Icon</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Function</strong></th>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/add-media.jpg" alt=""></td>
                                    <td>
                                        Add Media
                                    </td>
                                    <td>
                                        Used to upload and insert media such as images, audio, video or documents
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bold1.jpg" alt=""></td>
                                    <td>
                                        Bold
                                    </td>
                                    <td>
                                        Convert text to <strong>BOLD</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/italic1.jpg" alt=""></td>
                                    <td>Italic</td>
                                    <td><em>Italicize</em> text</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strike.jpg" alt=""></td>
                                    <td>Strikethrough</td>
                                    <td>Add a <s>strikethrough</s> to your text</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/numbered.jpg" alt=""></td>
                                    <td>Numbered List</td>
                                    <td>Create an Ordered (numbered) list</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blockquote.jpg" alt=""></td>
                                    <td>Blockquote</td>
                                    <td>Used as a way of showing a quote.
                                        The appearance of a Blockquote is dependent on the Theme that your site is using</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Horizontal Line</td>
                                    <td>Inserts a horizontal line into your page</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Align Left</td>
                                    <td>Align text to the left</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Align Center</td>
                                    <td>Align text in the center of the page</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Align Right</td>
                                    <td>Align text to the right</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Insert/edit link</td>
                                    <td>Used to create an html link to another page or website. If no text is selected first, the URL that you enter will also be used for the link text</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Remove link</td>
                                    <td>Remove the HTML link from the selected link. Your cursor must be sitting on an active link for the button to work </td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Insert Read More tag</td>
                                    <td>Inserts the More tag into your Page. Most blogs only display a small excerpt of a Post and you’re required to click the Post title or a ‘Read more...’ link to continue reading the rest of the article. When you insert a ‘More’ tag into your Post, everything prior to the tag is considered as this excerpt. Most times you’d only use this button when you’re creating a blog Post, rather than a Page.</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Toolbar Toggle</td>
                                    <td>Used to show or hide the second row of formatting buttons on the editor toolbar</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Distraction Free Writing</td>
                                    <td>Clicking this button will enlarge the editor so that it fills the browser window. Clicking the Exit full screen link at the top of the screen will reduce it back to its original size</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Style</td>
                                    <td>Used to format the Page text based on the styles used by the current Theme</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Underline</td>
                                    <td>Underline your text</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Justify</td>
                                    <td>Align text on both the left and right (i.e. justify)</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Text Color</td>
                                    <td>Use to change the color of text</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Paste as text</td>
                                    <td>Copying and pasting text from other sites or word processors sometimes leaves the text formatted differently to what you were expecting. The reason for this is that quite often the html tags or codes that formatted the original text are pasted along with the text itself.</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Paste as text</td>
                                    <td>Copying and pasting text from other sites or word processors sometimes leaves the text formatted differently to what you were expecting. The reason for this is that quite often the html tags or codes that formatted the original text are pasted along with the text itself. To avoid this, Paste as Text will strip all these formatting and html tags. The Paste as Text option acts like a toggle, staying on until you turn it off by clicking the button again or until you save your page content</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Clear Formatting</td>
                                    <td>Use this to remove all the formatting (e.g. Bold, Underline, text color etc..) from the highlighted text</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Special character</td>
                                    <td>Used to insert special characters not easily accessible via the keyboard (e.g. ¼, ½, ¾, ©, €, ö etc..)</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Decrease indent</td>
                                    <td>Removes one level of indenting</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Increase indent</td>
                                    <td>Indents text by one level</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Undo</td>
                                    <td>Undo your last action</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Redo</td>
                                    <td>Redo your last action</td>
                                </tr>
                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Keyboard shortcuts</td>
                                    <td>Displays information about the WordPress Visual Editor along with keyboard shortcuts</td>
                                </tr>

                                <tr>
                                    <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/horizontal.jpg" alt=""></td>
                                    <td>Visual/Text</td>
                                    <td>Switches the editor view between the Visual Editor and the Text editor. The Text view will enable you to view the HTML code that makes up your content. For the more experienced users this can be helpful at times but for those not familiar with HTML tags, it’s not recommended</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile;?>
<?php endif; ?>
<?php get_footer();