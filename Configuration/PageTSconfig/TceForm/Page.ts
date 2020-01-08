# Let's disable some configuration of Copy/Paste
TCEMAIN {
    table {
        tt_content {
            disablePrependAtCopy = 1
            disableHideAtCopy = 1
        }

        pages {
            disablePrependAtCopy = 1
            disableHideAtCopy = 0
        }
    }
}

TCEFORM.pages {
    layout {

        config {
            default = 0
        }
        altLabels.0 = LLL:EXT:ns_theme_comingsoon/Resources/Private/Language/locallang.xlf:MainPage
        altLabels.1 = LLL:EXT:ns_theme_comingsoon/Resources/Private/Language/locallang.xlf:Subpage
        removeItems = 2,3
    }
}

# Remove default custom elements from EXT:ns_basetheme 
mod.wizards.newContentElement.wizardItems.extra {
  show := removeFromList(ns_imageteaser, ns_record, ns_slider)
}