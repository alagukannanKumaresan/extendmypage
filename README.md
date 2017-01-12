# extendmypage
If you are using Typo3 & looking for Google Analytics 'Utm' parameters testing for your campaign management, then you are at right way here ;)

### Download also from Typo3 Website: https://typo3.org/extensions/repository/view/extendmypage

## Advantage:
Normally you can't setup the parameters above meta tag. But use this plugin, you will see magic!


## Uses:
1. It will extend the page properties.
2. As well as help us to create 'utm' parameters of Google Analytics.
3. Page specific option will work just by adding PIDinRootline.(Because you would like to test utm parameters by every page rather than whole website.)

## What you have to do:

1. Pull or Download the extension from my repository, then paste into your folder under typo3conf/ext/.
2. Then go to Extension Manager and add the extension.
3. Copy the below Typoscript and add it your Template Root Setup.
4. Go to Page, Click Edit Pencil, you will see New Tab added 'UTM Parameters'. Just add those required fields, save.
5. Now go to webpage, see your source code. You will see that magic. Yes your UTM parameters visible and Google can use this for your Campaign Management.


## Required Typoscript to Add in Root Page Template Setup:

```
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



# Use your PID that which page you require to add utm campaign parameters. 
[PIDinRootline=75]

page.headerData.10  < lib.pageconfig.tx_extendmypage_headerhtmlcode

page.headerData.20 = TEXT
page.headerData.20.value (

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setCampSourceKey', 1, 'Source', '
) 

page.headerData.30  < lib.pageconfig.tx_extendmypage_sourceparam

page.headerData.40 = TEXT
page.headerData.40.value (
']);
_gaq.push(['_setCampMediumKey', 2, 'Medium', '
)
page.headerData.50  < lib.pageconfig.tx_extendmypage_mediumparam

page.headerData.60 = TEXT
page.headerData.60.value (
']);
_gaq.push(['_setCampContentKey', 3, 'Content', '
)

page.headerData.70  < lib.pageconfig.tx_extendmypage_contentparam


page.headerData.80 = TEXT
page.headerData.80.value (
']);
_gaq.push(['_setCampTermKey', 4, 'Term', '
)

page.headerData.90  < lib.pageconfig.tx_extendmypage_termparam


page.headerData.100 = TEXT
page.headerData.100.value (
']);
_gaq.push(['_setCampNameKey', 5, 'Name', '
)

page.headerData.110  < lib.pageconfig.tx_extendmypage_nameparam


page.headerData.120 = TEXT
page.headerData.120.value (
']);

_gaq.push(['_setDomainName', 'www.yourdomain.com']);
_gaq.push(['myTracker._trackPageview']);
</script>

)


[end]

```


## If you have any queries, don't hesitate to poke me. My email id, alagukan@gmail.com 
