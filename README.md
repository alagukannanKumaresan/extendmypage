# extendthepage
It will extend the page properties as well as help to create 'utm' parameters of Google Analytics

#Required Typoscript to Add in Root Page Template Setup:


lib.pageconfig {
    tx_extendmypage_headerhtmlcode = TEXT
    tx_extendmypage_headerhtmlcode {
        value = default
        override {
           required = 1
           data = levelfield : -1 , tx_extendmypage_headerhtmlcode, slide
        }
    }
    tx_extendmypage_sourceparam = TEXT
    tx_extendmypage_sourceparam {
        value = default
        override {
           required = 1
           data = levelfield : -1 , tx_extendmypage_sourceparam, slide
        }
    }
    tx_extendmypage_mediumparam = TEXT
    tx_extendmypage_mediumparam {
        value = default
        override {
           required = 1
           data = levelfield : -1 , tx_extendmypage_mediumparam, slide
        }
    }
    tx_extendmypage_contentparam = TEXT
    tx_extendmypage_contentparam {
        value = default
        override {
           required = 1
           data = levelfield : -1 , tx_extendmypage_contentparam, slide
        }
    }
    tx_extendmypage_termparam = TEXT
    tx_extendmypage_termparam {
        value = default
        override {
           required = 1
           data = levelfield : -1 , tx_extendmypage_termparam, slide
        }
    }
    tx_extendmypage_nameparam = TEXT
    tx_extendmypage_nameparam {
        value = default
        override {
           required = 1
           data = levelfield : -1 , tx_extendmypage_nameparam, slide
        }
    }
            
}


