# Grab all the constant
plugin {
    ns_basetheme.settings.rootpage = {$ns_basetheme.website.settings.rootpage}
    ns_theme_comingsoon{
        settings {
            twitter-link = {$ns_theme_comingsoon.website.settings.twitter-link}
            facebook-link = {$ns_theme_comingsoon.website.settings.facebook-link}
            instagram-link = {$ns_theme_comingsoon.website.settings.instagram-link}
        }
    }
}

// Initiate Page Object
page = PAGE
page {

    config.pageTitleFirst = 1
    config.pageTitleSeparator = |
    config.pageTitleSeparator.noTrimWrap = | | |

    // Set default page typenum
    typeNum = 0

    // Setup favion
    shortcutIcon = typo3conf/ext/ns_theme_comingsoon/Resources/Public/Icons/favicon.ico

    bodyTag >
    bodyTagCObject = TEXT
    bodyTagCObject {
        value = <body id='page_{page:uid}'>
        insertData = 1
    }

    headerData {
        10 = TEXT
        10.value(
            <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                  ga('create', '{$ns_theme_comingsoon.website.settings.Analytics}', 'auto');
                  ga('send', 'pageview');
            </script>
        )    
    }

    // Set viewport
    meta {
        viewport = width=device-width, initial-scale=1, shrink-to-fit=no
        application-name = T3 Commingsoon
        keywords.data = page:keywords
    }

    // Initiate all the css-together
    includeCSS {
        10 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/vendor/bootstrap/css/bootstrap.min.css
        20 = https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i
        30 = https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i
        40 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/vendor/fontawesome-free/css/all.min.css
        50 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/css/coming-soon.min.css
        60 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/css/custom.css
    }

    // Initiate all the js-together
    includeJSFooter {
        10 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/vendor/jquery/jquery.min.js
        20 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/vendor/bootstrap/js/bootstrap.bundle.min.js
        30 = typo3conf/ext/ns_theme_comingsoon/Resources/Public/js/coming-soon.min.js
    }
    
    10 = FLUIDTEMPLATE
    10 {
        layoutRootPath = {$ns_theme_comingsoon.website.paths.layoutRootPath}
        partialRootPath = {$ns_theme_comingsoon.website.paths.partialRootPath}
        templateRootPath = {$ns_theme_comingsoon.website.paths.templateRootPath}



        file = TEXT
        file.stdWrap.cObject = CASE
        file.stdWrap.cObject {
            key.field = layout
            default = TEXT
            default.value = {$ns_theme_comingsoon.website.paths.templateRootPath}Default.html
            
        }    

        settings < plugin.ns_basetheme.settings
        settings.ns_comming_soon < plugin.ns_theme_comingsoon.settings
    }
}

# Get default content
lib {

    content = CONTENT
    content < styles.content.get

    footerdataContent < lib.content
    footerdataContent.select.where = colPos = 1
    footerdataContent.slide = -1
}

# <body> class based on backend_layout
page.bodyTagCObject {
    wrap = |

    10 = COA
    10 {
        # layout
        50 = CASE
        50 {
            key.data = levelfield:-1, backend_layout_next_level, slide
            key.override.field = backend_layout

            default = TEXT
            default.value = default

            pagets__content = TEXT
            pagets__content.value = content
        }
    }
}