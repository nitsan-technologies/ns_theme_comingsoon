# TypoScript for rendering in frontend
tt_content.gridelements_pi1.20.10.setup {

    # One column grid container
    1 < lib.gridelements.defaultGridSetup
    1 {
        cObject = FLUIDTEMPLATE
        cObject {
            file = typo3conf/ext/ns_theme_comingsoon/Resources/Private/Extensions/Grid/oneColumn.html
        }
    }
}