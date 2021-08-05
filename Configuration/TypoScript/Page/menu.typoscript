// Draw main menu
menu.main = HMENU
menu.main {
	
	special = directory
	special.value = {$ns_basetheme.website.settings.main_menu}
		
	1 = TMENU
	1 {
		wrap = <ul id="menu-main-menu" class="menu menu-main">|</ul>
		expAll = 1
		noBlur = 1
		
		NO = 1
		NO {
				wrapItemAndSub = <li>|</li>
	            ATagBeforeWrap = 1
	            linkWrap = <span>|</span>
	            stdWrap.htmlSpecialChars = 1
	            wrapItemAndSub.override.cObject = COA
	            wrapItemAndSub.override.cObject {
	                if {
	                    value = 4
	                    equals.field = doktype
	                    isTrue = 1
	                    isTrue.if {
	                        value.data = TSFE:page|uid
	                        equals.field = shortcut
	                    }
	                }
	                10 = TEXT
	                10.value = <li class="current-menu-item">|</li>
	            }
		}
		
		ACT < .NO
		ACT {
			wrapItemAndSub = <li class="current-menu-item">|</li>
			linkWrap = <span>|</span>
		}

		CUR < .NO
		CUR {
			wrapItemAndSub = <li class="current-menu-item">|</li>
			linkWrap = <span>|</span>
		}
	}
	// 3.NO.doNotLinkIt = 1 |*| 0 |*| 0
}


lib.footercontent = CONTENT
lib.footercontent{
    table =tt_content
    select{
          pidInList = 1
    }          
}