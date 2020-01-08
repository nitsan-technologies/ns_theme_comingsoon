# TypoScript for rendering in frontend
tt_content.gridelements_pi1.20.10.setup {

    # One column grid container
    nsBase1Col < lib.gridelements.defaultGridSetup
    nsBase1Col {
        cObject = FLUIDTEMPLATE
        cObject {
            file = typo3conf/ext/ns_theme_comingsoon/Resources/Private/Extensions/Grid/oneColumn.html
        }
    }
}