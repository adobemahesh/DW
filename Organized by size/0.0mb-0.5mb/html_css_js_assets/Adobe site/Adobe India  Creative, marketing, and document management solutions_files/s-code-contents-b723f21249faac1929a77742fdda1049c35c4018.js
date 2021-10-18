/************************** Global Config *************************************/
var namespace = 'adobecorp';
var sObjectName = 's_adbadobenonacdc';
// so that the variable s_adbadobenonacdc is set globally on IE8 and below
var s_adbadobenonacdc;
//var s_account = ''; // don't set global s_account or DTM will use it always
/************************** Global Config End *********************************/

/************************** VisitorAPI.js Config ******************************/
//var visitor = new Visitor(namespace); // not yet...
//visitor.trackingServer = 'stats.adobe.com'; // not yet...
//visitor.trackingServerSecure = 'sstats.adobe.com'; // not yet...
/************************** VisitorAPI.js Config End **************************/

/************************** AppMeasurement.js Config **************************/
window[sObjectName] = new AppMeasurement();
var s_adobe = window[sObjectName]; // for backwards compatibility

window[sObjectName].account = _satellite._getAdobeAnalyticsAccount(sObjectName);

// dynamically set the rsid if the domain is adobe.com
var domain = window.location.hostname.toLowerCase();
if (domain.indexOf("adobe.com") !== -1) {
    if (domain.indexOf(".dev.adobe.") !== -1 ||
        domain.indexOf(".corp.adobe") !== -1 ||
        domain.indexOf(".dev0") !== -1 ||
        domain.indexOf(".qa0") !== -1 ||
        domain.indexOf(".pr0") !== -1 ||
        domain.indexOf("day.adobe.com") !== -1 ||
        domain.indexOf("stage.") !== -1 ||
        domain.indexOf("stage2.") !== -1 ||
        domain.indexOf("staging.") !== -1) {
        window[sObjectName].account = "adbadobenonacdcqa";
    } else {
        window[sObjectName].account = "adbadobenonacdcprod";
    }
}

//--------------------- Visitor Config -----------------------------------------
//window[sObjectName].visitorNamespace = namespace; //technically not needed
//window[sObjectName].visitor = Visitor.getInstance(namespace); // not yet...
//window[sObjectName].visitorID = ''; // not yet...

//--------------------- Other Config -------------------------------------------
window[sObjectName].charSet = 'UTF-8';
window[sObjectName].trackingServer = 'stats.adobe.com';
window[sObjectName].trackingServerSecure = 'sstats.adobe.com';
window[sObjectName].cookieDomainPeriods = _satellite._getDomainPeriods();
window[sObjectName].fpCookieDomainPeriods = _satellite._getDomainPeriods();
//window[sObjectName].cookieLifetime = ''; //set in UI
//window[sObjectName].currencyCode = ''; //set in UI
//window[sObjectName].debugTracking = false; // not going to set yet...
//window[sObjectName].dynamicVariablePrefix = 'D='; //set in UI
//window[sObjectName].mobile = ''; //not going to set here...not applicable

//--------------------- Link Tracking Config -----------------------------------
//window[sObjectName].maxDelay = 1000; // not going to set yet...
window[sObjectName].trackInlineStats = true; // ClickMap
window[sObjectName].trackDownloadLinks = true; //set in UI
window[sObjectName].trackExternalLinks = true; //set in UI
window[sObjectName].linkLeaveQueryString = false; //set in UI
window[sObjectName].linkTrackEvents = "None";
window[sObjectName].linkTrackVars = "None";
window[sObjectName].linkDownloadFileTypes = [
    'adpp',
    'air',
    'apk',
    'avi',
    'bin',
    'cptx',
    'css',
    'csv',
    'dmg',
    'doc',
    'docx',
    'eps',
    'exe',
    'flv',
    'hqx',
    'jar',
    'jpg',
    'js',
    'm4v',
    'mov',
    'mp3',
    'mpg',
    'msi',
    'mxp',
    'pdf',
    'png',
    'ppt',
    'pptx',
    'rar',
    'svg',
    'swc',
    'tab',
    'tbz2',
    'txt',
    'vsd',
    'vxd',
    'wav',
    'wma',
    'wmv',
    'xls',
    'xlsx',
    'xml',
    'zip',
    'zxp'].join(',');
window[sObjectName].linkExternalFilters = ''; //none
window[sObjectName].linkInternalFilters = [
    'acrobat.com',
    'acrobatclub.com',
    'acrobatusers.com',
    'adobe-createnow.jp',
    'adobe-creativity.com',
    'adobe-designforimpact.com',
    'adobe-digital-marketing.com',
    'adobe-edu.ru',
    'adobe-education.com',
    'adobe-eseminars.de',
    'adobe-events-france.com',
    'adobe-html5.jp',
    'adobe-max.com',
    'adobe-mobile.co.uk',
    'adobe-mobile.com',
    'adobe-mobile.de',
    'adobe-mobile.fr',
    'adobe-newsroom.de',
    'adobe-onlineservices.com',
    'adobe-pepe.jp',
    'adobe-promo.jp',
    'adobe-ria.jp',
    'adobe-solutions.de',
    'adobe-target.com',
    // should explicitly identify each TLD?
    'adobe.',
    'adobeacrobat.com',
    'adobeaemcloud.com',
    'adobeawards.com',
    'adobeceea.com',
    'adobecoopmdf.com',
    'adobecqcloud.com',
    'adobecreate.co.uk',
    'adobecreatenow-apac.com',
    'adobecreativecloud.com',
    'adobecreativesuite.it',
    'adobecs2.com',
    'adobecs3.com',
    'adobedigitalmarketing.co.uk',
    'adobedms.pl',
    'adobeexchange.com',
    'adobeeventsonline.com',
    'adobeformscentral.com',
    'adobeforums.com',
    'adobegeneration.anz.com',
    'adobegeneration.co.uk',
    'adobegeneration.com',
    'adobegov.com',
    'adobegunlugu.com',
    'adobeindia.com',
    'adobekb.com',
    'adobeknowhow.com',
    'adobeku.com',
    'adobeleanprint.com',
    'adobemarketing.co.uk',
    'adobemarketplace.com',
    'adobeme.com',
    'adobepartnernews.com',
    'adoberatingreviews.webqamapps.com',
    'adobestudentlicensing.at',
    'adobestudentlicensing.ch',
    'adobestudentlicensing.de',
    // should explicitly identify each TLD?    'adobesystems.' 
    'adobetraining.pro',
    'appspot.com',
    'behance.net',
    'canaladobe.com',
    'channelconduit.com',
    'cmoconnect.com',
    'douwriteright.com',
    'dpssummit.com',
    'echosign.com',
    'gocreate.pro',
    'hellodigitals.it',
    'jaknapdf.cz',
    'javascript:',
    'lightroomcomp.jp',
    'loveacrobat.co.za',
    'mailto:',
    // should explicitly identify each TLD?    'macromedia.' 
    'mediacenter-adobe.com',
    'photoshop.com',
    'rhapsodyconcept.com.sg',
    'tel:',
    '../'].join(',');


//--------------------- doPlugins ----------------------------------------------
window[sObjectName].usePlugins = true;
window[sObjectName].doPlugins = function (s) {
    var visitStart = 0,
        firstPage = false;

    if ("file:" == document.location.protocol) {
        // s.abort = true;
    }

    // fire demandbase
    if (_satellite.getVar('isSite_AdobeHelp') ||
        _satellite.getVar('isSite_AdobeHelpX')) {
        // don't use demandbase
    } else {
        s._plugin_demandbase({
            key: "e4086fa3ea9d74ac2aae2719a0e5285dc7075d7b",
            data_mapping: {
                sid: 'eVar56',
                //company: "eVar50",
                company_name: 'eVar50',
                //industry: "eVar51",
                industry_complete: 'eVar51',
                employee_range: 'eVar52',
                revenue_range: 'eVar53'
            },
            var_name: "s_adobe_dmdbase_v_1",
            link_name: "Genesis: Demandbase event"
        });
    }

    if (_satellite.getVar('useTool_adbnonacdcrefactor') &&
        typeof SiteCatalyst === 'object') {
        // products events
        if (typeof SiteCatalyst.productEvents === 'string' &&
            SiteCatalyst.productEvents) {
            s.events = _satellite._apl(
                s.events, SiteCatalyst.productEvents, ',', 2);
        }
        // products string
        var productsString = '';
        if (typeof SiteCatalyst.productKey === 'string' &&
            SiteCatalyst.productKey) {
            productsString = SiteCatalyst.productKey;
        } else if (typeof SiteCatalyst.sitecatalystProductKey === 'string' &&
            SiteCatalyst.sitecatalystProductKey) {
            productsString = SiteCatalyst.sitecatalystProductKey;
        }

        if (typeof productsString === 'string' && productsString) {
            productsString = productsString.indexOf('/Applications/') !== -1 ?
                productsString.replace('/Applications/', '') : productsString;
            productsString = ';' + productsString + ';;;;';
            s.products = _satellite._apl(s.products, productsString, ',', 2);
        }
    }

    // TODO: Figure out what this is here and where prop14 gets set
    if (typeof (s.prop14) !== 'undefined') {
        s.prop14 = s.prop14.toLowerCase();
        s.prop5 = s.prop5 + ":" + s.prop14;
    }

    // TODO: Figure out what to do about products string
    if (s.pageName.indexOf(":products:") != -1 && s.products)
        s.prop2 = s.products.split(";")[1];


    // Get the visit start page
    visitStart = _satellite._getVisitStart('s_vs');
    if (visitStart && visitStart == 1) {
        firstPage = 'firstpage';
    }
    // clickpast makes sure that event19 gets fired before event20
    s.clickPast(firstPage, 'event19', 'event20');

    // Automate Search Keyword Variables and Events
    if (s.prop6) {
        s.eVar3 = s.prop6;
        s.events = _satellite._apl(s.events, 'event1', ',', 2);
        if (s.prop7 && (s.prop7 == '0' || s.prop7 == 'zero')) {
            s.prop7 = 'zero';
            s.events = _satellite._apl(s.events, 'event2', ',', 2);
        }
    }

    // Don't refire search event if same search term passed in twice in a row
    var t_search = _satellite._getValOnce(s.eVar3, 's_stv', 0);
    if (t_search === '') {
        var a = s.events ? s.events.split(',') : [],
            e = '',
            ev = [],
            i;
        for (i = 0; i < a.length; i++) {
            if (a[i] == 'event1' || a[i] == 'event2')
                continue;
            else
                ev.push(a[i]);
        }
        s.events = ev.join(',');
    }

    // Automate Custom ProdView Event
    if (s.events && s.events.indexOf('prodView') !== -1)
        s.events = _satellite._apl(s.events, 'event3', ',', 2);

    //  Automate OrderID eVar
    if (s.purchaseID)
        s.eVar27 = s.purchaseID;

    // create productmerch product for merchandising eVar binding
    if (s.eVar1 && 
        (!s.products || 
            (s.products && s.products.indexOf(';productmerch') > -1) || 
            s.newProduct == 'true') &&
        (s.p_fo('onemerch') == 1 || 
            (s.linkType != '' && s.linkTrackVars.indexOf('eVar1') > -1))
    ) {
        if (!_satellite._readCookie('productnum'))
            s.productNum = 1;
        else
            s.productNum = parseInt(_satellite._readCookie('productnum')) + 1;
        s.products = ';productmerch' + s.productNum;
        var e = new Date();
        e.setTime(e.getTime() + (30 * 86400000));
        _satellite._setCookie('productnum', s.productNum, e);
        s.linkTrackVars = _satellite._apl(s.linkTrackVars, 'events,products', ',', 2);
        s.linkTrackEvents = _satellite._apl(s.linkTrackEvents, 'event13', ',', 2);
        s.events = _satellite._apl(s.events, 'event13', ',', 2);
    }
    if (_satellite._readCookie('productnum') && s.events.indexOf('purchase') > -1)
        _satellite._setCookie('productnum', '0', 0);

    // Determine Search Location, Add-to-Cart Location
    // via previous page name
    if (s.events && s.events.indexOf('scAdd') > -1) {
        s.linkTrackVars = _satellite._apl(s.linkTrackVars, 'eVar23', ',', 2);
        if (s.prop12)
            s.eVar23 = s.prop12;
    }

    // Blank out products if events isn't set so that we don't inflate prodViews
    // TODO: revisit
    if (s.products && !s.events)
        s.products = '';

    // AAM Integration (set listVar to AAM segments)
    if (_satellite._readCookie("aam_tnt") !== '') 
        s.list1 = _satellite._unescape(_satellite._readCookie("aam_tnt"));

    if (typeof window['mboxVersion'] !== "undefined" &&
        typeof window['mboxLoadSCPlugin'] === 'function') {
        mboxLoadSCPlugin(s);
        s.tnt = s._plugin_trackTNT();
    }
}

//--------------------- Plugins ------------------------------------------------
// Plugin Utility: first only
window[sObjectName].p_fo = function (n) {
    var s = this;
    if (!s.__fo) {
        s.__fo = new Object;
    }
    if (!s.__fo[n]) {
        s.__fo[n] = new Object;
        return 1;
    } else {
        return 0;
    }
}

// Plugin: clickPast - version 1.0
window[sObjectName].clickPast = function (scp, ct_ev, cp_ev, cpc) {
    var s = this,
        scp, ct_ev, cp_ev, cpc, ev, tct;
    if (s.p_fo(ct_ev) == 1) {
        if (!cpc) {
            cpc = 's_cpc';
        }
        ev = s.events ? s.events + ',' : '';
        if (scp) {
            s.events = ev + ct_ev;
            s.c_w(cpc, 1, 0);
        } else {
            if (s.c_r(cpc) >= 1) {
                s.events = ev + cp_ev;
                s.c_w(cpc, 0, 0);
            }
        }
    }
}

// Function - read combined cookies v 0.41
if (!window[sObjectName].__ccucr) {
    window[sObjectName].c_rr = window[sObjectName].c_r;
    window[sObjectName].__ccucr = true;

    window[sObjectName].c_r = function (k) {
        var s = this,
            d = new Date,
            v = s.c_rr(k),
            c = s.c_rspers(),
            i, m, e;
        if (v) return v;
        k = s.Util.urlEncode(k);
        i = c.indexOf(' ' + k + '=');
        c = i < 0 ? s.c_rr('s_sess') : c;
        i = c.indexOf(' ' + k + '=');
        m = i < 0 ? i : c.indexOf('|', i);
        e = i < 0 ? i : c.indexOf(';', i);
        m = m > 0 ? m : e;
        v = i < 0 ? '' : s.Util.urlDecode(c.substring(i + 2 + k.length, m < 0 ?
            c.length : m));
        return v;
    }

    window[sObjectName].c_rspers = function () {
        var s = this,
            cv = s.c_rr("s_pers"),
            date = new Date().getTime(),
            expd = null,
            cvarr = [],
            vcv = "";
        if (!cv) return vcv;
        cvarr = cv.split(";");
        for (var i = 0, l = cvarr.length; i < l; i++) {
            expd = cvarr[i].match(/\|([0-9]+)$/);
            if (expd && parseInt(expd[1]) >= date) {
                vcv += cvarr[i] + ";";
            }
        }
        return vcv;
    }
}
// Function - write combined cookies v 0.41
if (!window[sObjectName].__ccucw) {
    window[sObjectName].c_wr = window[sObjectName].c_w;
    window[sObjectName].__ccucw = true;

    window[sObjectName].c_w = function (k, v, e) {
        var s = this,
            d = new Date,
            ht = 0,
            pn = 's_pers',
            sn = 's_sess',
            pc = 0,
            sc = 0,
            pv, sv, c, i, t;
        d.setTime(d.getTime() - 60000);
        if (s.c_rr(k)) s.c_wr(k, '', d);
        k = s.Util.urlEncode(k);
        pv = s.c_rspers();
        i = pv.indexOf(' ' + k + '=');
        if (i > -1) {
            pv = pv.substring(0, i) + pv.substring(pv.indexOf(';', i) + 1);
            pc = 1;
        }
        sv = s.c_rr(sn);
        i = sv.indexOf(' ' + k + '=');
        if (i > -1) {
            sv = sv.substring(0, i) + sv.substring(sv.indexOf(';', i) + 1);
            sc = 1;
        }
        d = new Date;
        if (e) {
            if (e.getTime() > d.getTime()) {
                pv += ' ' + k + '=' + s.Util.urlEncode(v) + '|' + e.getTime() +
                    ';';
                pc = 1;
            }
        } else {
            sv += ' ' + k + '=' + s.Util.urlEncode(v) + ';';
            sc = 1;
        }
        sv = sv.replace(/%00/g, '');
        pv = pv.replace(/%00/g, '');
        if (sc) s.c_wr(sn, sv, 0);
        if (pc) {
            t = pv;
            while (t && t.indexOf(';') != -1) {
                var t1 = parseInt(t.substring(t.indexOf('|') + 1, t.indexOf(';')));
                t = t.substring(t.indexOf(';') + 1);
                ht = ht < t1 ? t1 : ht;
            }
            d.setTime(ht);
            s.c_wr(pn, pv, d);
        }
        return v == s.c_r(s.Util.urlDecode(k));
    }
}

// Plugin socialAuthors v1.5.1
window[sObjectName].socialAuthors = function () {
    var s = this,
        g;
    g = s.referrer ? s.referrer : document.referrer;
    if (g.indexOf('http://t.co/') === 0 || 
        g.indexOf('https://t.co/') === 0 ||
        g.indexOf('pinterest.com/pin') !== -1 || 
        g.indexOf('tumblr.com') !== -1 ||
        g.indexOf('youtube.com') !== -1) {
        s.Integrate.add('SocialAuthor');
        s.Integrate.SocialAuthor.get(
            'http://sa-services.social.omniture.com/author/name?'
            +'var=[VAR]&callback=s_adbadobenonacdc.socialAuthorSearch&rs=' +
            encodeURIComponent(s_account) + '&q=' + encodeURIComponent(g)
        );
        s.Integrate.SocialAuthor.delay();
        s.Integrate.SocialAuthor.setVars = function (s, p) {
            s.contextData['a.socialauthor'] = s.user;
        }
    }
}
window[sObjectName].socialAuthorSearch = function (obj) {
    var s = this;
    if (typeof obj === 'undefined' || typeof obj.author === 'undefined') {
        s.user = 'Not Found';
    } else {
        s.user = obj.author;
    }
    s.Integrate.SocialAuthor.ready();
}

// trackTNT plugin 2.1
window[sObjectName]._plugin_trackTNT = function (v, p, b) {
    var s = this,
        n = 's_tnt',
        q = 's_tntref',
        r = '',
        pm = false;
    v = (v) ? v : n;
    p = (p) ? p : n;
    b = (b) ? b : true;
    if (s.Util.getQueryParam(q) !== '') {
        s.referrer = s.Util.getQueryParam(q);
    } else if (s.c_r(q) !== '') {
        s.referrer = s.c_r(q);
        document.cookie = q + '=;path=/;expires=Thu, 01-Jan-1970 00:00:01 GMT;';
    } else if (
        (document.cookie.indexOf(q) != -1 && s.c_r(q) === '') ||
        (window.location.search.indexOf(q + '=') != -1 &&
            s.Util.getQueryParam(q) === '')) {
        s.referrer = 'Typed/Bookmarked';
        document.cookie = q + '=;path=/;expires=Thu, 01-Jan-1970 00:00:01 GMT;';
    }
    if (s.Util.getQueryParam(p) !== '') {
        pm = s.Util.getQueryParam(p);
    } else if (s.c_r(p)) {
        pm = s.c_r(p);
        document.cookie = p + '=;path=/;expires=Thu, 01-Jan-1970 00:00:01 GMT;';
    } else if (s.c_r(p) === '' && s.Util.getQueryParam(p) === '') {
        pm = '';
    }
    if (pm) r += (pm + ',');
    if (window[v] !== undefined) r += window[v];
    if (b) window[v] = '';
    return r;
};

window[sObjectName]._plugin_trackTNT.version = '2.1';

// _plugin_demandbase version 1.4
_satellite._adobeAnalytics_plugin_demandbase(window[sObjectName]);

// _plugin_trackSynchronous (t_s) version 1.0
_satellite._adobeAnalytics_plugin_trackSynchronous(window[sObjectName]);

/************************** AppMeasurement.js Config End **********************/

/************************** AppMeasurement_Module_media.js Config *************/
if (_satellite.getVar('useModule_media')) {
    window[sObjectName].enableVideoTracking = true;
    window[sObjectName].loadModule("Media");
    window[sObjectName].Media.autoTrack = false;
    window[sObjectName].Media.trackVars = "events,prop8,eVar9,eVar10,eVar11";
    window[sObjectName].Media.trackEvents = "event4,event5,event6,event7,event8,event9,event10";
    window[sObjectName].Media.trackMilestones = "25,50,75";

    if (window.location.hostname.toLowerCase().indexOf("tv.adobe.com") != -1) {
        window[sObjectName].Media.playerName = "AdobeTV HTML5 Player";
    } else {
        window[sObjectName].Media.playerName = "Microsite HTML5 Player";
    }

    window[sObjectName].Media.segmentByMilestones = true;
    window[sObjectName].Media.trackUsingContextData = true;
    window[sObjectName].Media.contextDataMapping = {
        "a.media.name": "eVar9,prop8",
        "a.media.segment": "eVar10",
        "a.contentType": "eVar11",
        "a.media.timePlayed": "event4",
        "a.media.view": "event5",
        "a.media.segmentView": "event6",
        "a.media.complete": "event10",
        //"a.media.playerName": '', revisit this later 
        "a.media.milestones": {
            25: "event7",
            50: "event8",
            75: "event9"
        }
    };

}

/************************** AppMeasurement_Module_media.js Config End *********/

/************************** AppMeasurement_Module_Integrate.js Config *********/
window[sObjectName].loadModule("Integrate");
window[sObjectName].Integrate.onLoad = function (s, m) {
    window[sObjectName].socialAuthors();
}
/************************** AppMeasurement_Module_Integrate.js Config End *****/

// VisitorAPI.js Library in Page Load Rule
// AppMeasurement.js Library in Page Load Rule
// AppMeasurement_Module_media.js in Page Load Rule
// AppMeasurement_Module_Integrate.js in Page Load Rule
