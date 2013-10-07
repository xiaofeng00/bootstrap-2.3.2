<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8" />
        <title>
            Query: Open Tasks
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <link rel="apple-touch-icon" href="/res/3380adf2/rsrc/image/apple-touch-icon.png"
        />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <script type="text/javascript">
            (top == self) || top.location.replace(self.location.href);
            window.__DEV__ = 0;
        </script>
        
         <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    
        <link rel="stylesheet" type="text/css" href="https://secure.phabricator.com/res/pkg/1fa81138/core.pkg.css"
        />
        <link rel="stylesheet" type="text/css" href="https://secure.phabricator.com/res/pkg/49898640/maniphest.pkg.css"
        />
        <link rel="stylesheet" type="text/css" href="https://secure.phabricator.com/res/cd1b04cf/rsrc/css/phui/phui-box.css"
        />
        
        
        <style type="text/css">
            .PhabricatorMonospaced, .phabricator-remarkup .remarkup-code-block { font: 10px
            "Menlo", "Consolas", "Monaco", monospace; } .platform-windows .PhabricatorMonospaced,
            .platform-windows .phabricator-remarkup .remarkup-code-block { font: 11px "Menlo",
            "Consolas", "Monaco", monospace; }
			
						h1, h2, h3 {
line-height: 20px;
}
li {
line-height:inherit;
}

        </style>
        
        
        
        <script type="text/javascript" src="https://secure.phabricator.com/res/7c6c8d5a/rsrc/externals/javelin/core/init.js">
        </script>
    </head>
    
    <body class="device-desktop platform-windows">
        <div id="base-page" class="phabricator-standard-page">
            <div class="phabricator-main-menu" id="UQ0_28">
                <a class="phabricator-main-menu-expand-button phabricator-expand-search-menu" data-sigil="jx-toggle-class"
                data-meta="0_109"><span class="phabricator-menu-button-icon sprite-menu menu-icon-app" id="UQ0_35"></span></a>
                <a class="phabricator-main-menu-search-button phabricator-expand-application-menu"
                data-sigil="jx-toggle-class" data-meta="0_110"><span class="phabricator-menu-button-icon sprite-menu menu-icon-search" id="UQ0_36"></span></a>
                <a class="phabricator-main-menu-logo" href="/"><span class="sprite-menu phabricator-main-menu-logo-image"></span></a>
                <div class="phabricator-main-menu-alerts">
                    <a href="/notification/" class="sprite-menu alert-notifications" id="UQ0_34"><span class="sprite-menu phabricator-main-menu-alert-icon"></span><span id="UQ0_32" class="phabricator-main-menu-alert-count">0</span></a>
                    <a href="/conpherence/" class="sprite-menu alert-notifications" id="UQ0_29"><span class="sprite-menu phabricator-main-menu-message-icon"></span><span id="UQ0_30" class="phabricator-main-menu-message-count">0</span></a>
                </div>
                <ul class="phui-list-view phabricator-dark-menu phabricator-application-menu">
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/create/" class="phui-list-item-href"><span class="phui-list-item-name">Create Task</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-label ">
                        <div>
                            <span class="phui-list-item-name">
                                Queries
                            </span>
                        </div>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/query/assigned/" class="phui-list-item-href"><span class="phui-list-item-name">Assigned</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/query/authored/" class="phui-list-item-href"><span class="phui-list-item-name">Authored</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/query/open/" class="phui-list-item-href"><span class="phui-list-item-name">Open Tasks</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/query/all/" class="phui-list-item-href"><span class="phui-list-item-name">All Tasks</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/query/edit/" class="phui-list-item-href"><span class="phui-list-item-name">Edit Queries...</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-label ">
                        <div>
                            <span class="phui-list-item-name">
                                Search
                            </span>
                        </div>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/query/advanced/" class="phui-list-item-href"><span class="phui-list-item-name">Advanced Search</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-label ">
                        <div>
                            <span class="phui-list-item-name">
                                Reports
                            </span>
                        </div>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link ">
                        <a href="/maniphest/report/" class="phui-list-item-href"><span class="phui-list-item-name">Reports</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-label ">
                        <div>
                            <span class="phui-list-item-name">
                                Actions
                            </span>
                        </div>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link core-menu-item">
                        <a href="/p/wisutsak.jaisue.7/" class="phui-list-item-href"><span class="phabricator-core-menu-icon phabricator-core-menu-profile-image" style="background-image: url(https://secure.phabricator.com/file/data/ai4p4oxbnvwxcejl44k2/PHID-FILE-lfhv7o64zvlbmxol7kr7/profile-facebook_-profile.jpg)"></span><span class="phui-list-item-name">wisutsak.jaisue.7</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon core-menu-item">
                        <a href="/settings/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-settings phui-list-item-icon"></span><span class="phabricator-core-menu-icon sprite-apps-large apps-settings-light-large"></span><span class="phui-list-item-name">Settings</span></a>
                    </li>
                    <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon core-menu-item"
                    data-sigil="workflow">
                        <a href="/logout/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-power phui-list-item-icon"></span><span class="phabricator-core-menu-icon sprite-apps-large apps-power-light-large"></span><span class="phui-list-item-name">Log Out</span></a>
                    </li>
                </ul>
                <ul class="phui-list-view phabricator-dark-menu phabricator-search-menu">
                    <li class="phui-list-item-view phui-list-item-type-link phabricator-main-menu-search">
                        <div>
                            <form action="/search/" method="POST">
                                <input type="hidden" name="__csrf__" value="B@pfrncfeg19f671ed9c54c4bf" />
                                <input type="hidden" name="__form__" value="1" />
                                <div class="phabricator-main-menu-search-container">
                                    <input type="text" name="query" id="UQ0_37" autocomplete="off" />
                                    <button>
                                        Search
                                    </button>
                                    <input type="hidden" name="scope" />
                                    <div id="UQ0_38" class="phabricator-main-menu-search-target">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
                <div id="UQ0_33" class="phabricator-notification-menu" style="display: none;" data-sigil="phabricator-notification-menu">
                </div>
                <div id="UQ0_31" class="phabricator-notification-menu" style="display: none;" data-sigil="phabricator-notification-menu">
                </div>
            </div>
            <div class="phabricator-standard-page-body">
                <div class="phabricator-nav has-local-nav has-crumbs" id="UQ0_1">
                    <div class="phabricator-nav-column-background" id="UQ0_3">
                    </div>
                    <div class="phabricator-nav-local phabricator-side-menu" id="UQ0_2">
                        <ul class="phui-list-view ">
                            <li class="phui-list-item-view phui-list-item-type-label ">
                                <div>
                                    <span class="phui-list-item-name">
                                        Queries
                                    </span>
                                </div>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link ">
                                <a href="/maniphest/query/assigned/" class="phui-list-item-href"><span class="phui-list-item-name">Assigned</span></a>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link ">
                                <a href="/maniphest/query/authored/" class="phui-list-item-href"><span class="phui-list-item-name">Authored</span></a>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link phui-list-item-selected">
                                <a href="/maniphest/query/open/" class="phui-list-item-href"><span class="phui-list-item-name">Open Tasks</span></a>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link ">
                                <a href="/maniphest/query/all/" class="phui-list-item-href"><span class="phui-list-item-name">All Tasks</span></a>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link ">
                                <a href="/maniphest/query/edit/" class="phui-list-item-href"><span class="phui-list-item-name">Edit Queries...</span></a>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-label ">
                                <div>
                                    <span class="phui-list-item-name">
                                        Search
                                    </span>
                                </div>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link ">
                                <a href="/maniphest/query/advanced/" class="phui-list-item-href"><span class="phui-list-item-name">Advanced Search</span></a>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-label ">
                                <div>
                                    <span class="phui-list-item-name">
                                        Reports
                                    </span>
                                </div>
                            </li>
                            <li class="phui-list-item-view phui-list-item-type-link ">
                                <a href="/maniphest/report/" class="phui-list-item-href"><span class="phui-list-item-name">Reports</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="phabricator-nav-content mlb" id="UQ0_0">
                        <div class="phabricator-crumbs-view sprite-gradient gradient-breadcrumbs">
                            <div class="phabricator-crumbs-actions">
                                <a href="/maniphest/task/create/" class="phabricator-crumbs-action" data-sigil=""><span class="sprite-icons icons-create"></span><span class="phabricator-crumbs-action-name">Create Task</span></a>
                            </div>
                            <a href="/maniphest/" class="phabricator-crumb-view phabricator-crumb-has-icon"><span class="phabricator-crumb-icon sprite-apps-large apps-maniphest-dark-large"></span><span class="phabricator-crumb-name"></span><span class="sprite-menu phabricator-crumb-divider"></span></a>
                            <span class="phabricator-crumb-view phabricator-last-crumb">
                                <span class="phabricator-crumb-name">
                                    Search
                                </span>
                            </span>
                        </div>
                        <div class="aphront-list-filter-wrap">
                            <div class="aphront-list-filter-view aphront-list-filter-view-collapsible">
                                <div class="aphront-list-filter-reveal">
                                    <div class="aphront-list-filter-description">
                                        Showing results for query &quot;Open Tasks&quot;.
                                    </div>
                                    <a class="button grey" id="UQ0_25" href="/maniphest/query/advanced/?query=open"
                                    data-sigil="reveal-content" data-meta="0_107">Edit Query...</a>
                                    <a class="button grey" style="display: none;" href="#" id="UQ0_26" data-sigil="reveal-content"
                                    data-meta="0_108">Hide Query</a>
                                </div>
                                <div id="UQ0_27" style="display: none;">
                                    <div class="aphront-list-filter-view-content">
                                        <form method="POST">
                                            <input type="hidden" name="__csrf__" value="B@pfrncfeg19f671ed9c54c4bf" />
                                            <input type="hidden" name="__form__" value="1" />
                                            <div class="phui-form-view">
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        Assigned To
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_4" class="jx-tokenizer-container">
                                                            <input name="assigned" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-checkbox aphront-form-control-nolabel">
                                                    <div class="aphront-form-input">
                                                        <table class="aphront-form-control-checkbox-layout">
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_5" type="checkbox" name="withUnassigned" value="1" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_5">
                                                                        Show only unassigned tasks.
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        In All Projects
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_6" class="jx-tokenizer-container">
                                                            <input name="allProjects" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-checkbox aphront-form-control-nolabel">
                                                    <div class="aphront-form-input">
                                                        <table class="aphront-form-control-checkbox-layout">
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_7" type="checkbox" name="withNoProject" value="1" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_7">
                                                                        Show only tasks with no projects.
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        In Any Project
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_8" class="jx-tokenizer-container">
                                                            <input name="anyProjects" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        Not In Projects
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_9" class="jx-tokenizer-container">
                                                            <input name="excludeProjects" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        In Users&#039; Projects
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_10" class="jx-tokenizer-container">
                                                            <input name="userProjects" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        Authors
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_11" class="jx-tokenizer-container">
                                                            <input name="authors" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-tokenizer">
                                                    <label class="aphront-form-label">
                                                        Subscribers
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <div id="UQ0_12" class="jx-tokenizer-container">
                                                            <input name="subscribers" class="jx-tokenizer-input" style="width: 0px;" disabled="disabled"
                                                            type="text" data-mustcapture="1" data-sigil="tokenizer-input" />
                                                            <div style="clear: both;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-checkbox">
                                                    <label class="aphront-form-label">
                                                        Status
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <table class="aphront-form-control-checkbox-layout">
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_13" type="checkbox" name="statuses[]" value="0" checked="checked"
                                                                    />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_13">
                                                                        Open
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_14" type="checkbox" name="statuses[]" value="1" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_14">
                                                                        Resolved
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_15" type="checkbox" name="statuses[]" value="2" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_15">
                                                                        Wontfix
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_16" type="checkbox" name="statuses[]" value="3" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_16">
                                                                        Invalid
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_17" type="checkbox" name="statuses[]" value="4" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_17">
                                                                        Duplicate
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_18" type="checkbox" name="statuses[]" value="5" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_18">
                                                                        Spite
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-checkbox">
                                                    <label class="aphront-form-label">
                                                        Priority
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <table class="aphront-form-control-checkbox-layout">
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_19" type="checkbox" name="priorities[]" value="100" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_19">
                                                                        Unbreak Now!
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_20" type="checkbox" name="priorities[]" value="90" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_20">
                                                                        Needs Triage
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_21" type="checkbox" name="priorities[]" value="80" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_21">
                                                                        High
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_22" type="checkbox" name="priorities[]" value="50" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_22">
                                                                        Normal
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_23" type="checkbox" name="priorities[]" value="25" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_23">
                                                                        Low
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <input id="UQ0_24" type="checkbox" name="priorities[]" value="0" />
                                                                </td>
                                                                <th>
                                                                    <label for="UQ0_24">
                                                                        Wishlist
                                                                    </label>
                                                                </th>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-select">
                                                    <label class="aphront-form-label">
                                                        Group By
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <select name="group">
                                                            <option value="priority">
                                                                Priority
                                                            </option>
                                                            <option value="assigned">
                                                                Assigned
                                                            </option>
                                                            <option value="status">
                                                                Status
                                                            </option>
                                                            <option value="project">
                                                                Project
                                                            </option>
                                                            <option value="none">
                                                                None
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-select">
                                                    <label class="aphront-form-label">
                                                        Order By
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <select name="order">
                                                            <option value="priority">
                                                                Priority
                                                            </option>
                                                            <option value="updated">
                                                                Date Updated
                                                            </option>
                                                            <option value="created">
                                                                Date Created
                                                            </option>
                                                            <option value="title">
                                                                Title
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-text">
                                                    <label class="aphront-form-label">
                                                        Contains Text
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <input type="text" name="fulltext" />
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-text">
                                                    <label class="aphront-form-label">
                                                        Task IDs
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <input type="text" name="ids" value="" />
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-text">
                                                    <label class="aphront-form-label">
                                                        Created After
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <input type="text" name="createdStart" />
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-text">
                                                    <label class="aphront-form-label">
                                                        Created Before
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <input type="text" name="createdEnd" />
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-text">
                                                    <label class="aphront-form-label">
                                                        Page Size
                                                    </label>
                                                    <div class="aphront-form-input">
                                                        <input type="text" name="limit" value="100" />
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                                <div class="aphront-form-control aphront-form-control-submit aphront-form-control-nolabel">
                                                    <div class="aphront-form-input">
                                                        <button type="submit" name="__submit__">
                                                            Execute Query
                                                        </button>
                                                    </div>
                                                    <div style="clear: both;">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a name="R" id="R" class="phabricator-anchor-view"></a>
                        
                        
                        <div class="maniphest-list-container">
                        
                        
                        <div class="bs-docs-example">
                        
                        
                        <pre class="prettyprint linenums">
$('#myModal').on('hidden', function () {
  // do something…
})
</pre>

                        <div class="alert alert-info">
              <strong>Heads up!</strong>
              You must manage the position of a pinned element and the behavior of its immediate parent. Position is controlled by <code>affix</code>, <code>affix-top</code>, and <code>affix-bottom</code>. Remember to check for a potentially collapsed parent when the affix kicks in as it's removing content from the normal flow of the page.
            </div>
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse" style="height: 0px;">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Collapsible Group Item #3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body in collapse" style="height: auto;">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
                        <form class="bs-docs-example form-horizontal">
                        <button type="button" id="fat-btn" data-loading-text="loading..." class="btn btn-primary">
                Loading state
              </button>
                        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-info">Info</button></td>
                <td><code>btn btn-info</code></td>
                <td>Used as an alternative to the default styles</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-success">Success</button></td>
                <td><code>btn btn-success</code></td>
                <td>Indicates a successful or positive action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-warning">Warning</button></td>
                <td><code>btn btn-warning</code></td>
                <td>Indicates caution should be taken with this action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-danger">Danger</button></td>
                <td><code>btn btn-danger</code></td>
                <td>Indicates a dangerous or potentially negative action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                <td><code>btn btn-inverse</code></td>
                <td>Alternate dark gray button, not tied to a semantic action or use</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-link">Link</button></td>
                <td><code>btn btn-link</code></td>
                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
              </tr>
            </tbody>
          </table>
          
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning">
                <span class="help-inline">Something may have gone wrong</span>
              </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError">
                <span class="help-inline">Please correct the error</span>
              </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="inputInfo">Input with info</label>
              <div class="controls">
                <input type="text" id="inputInfo">
                <span class="help-inline">Username is taken</span>
              </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess">
                <span class="help-inline">Woohoo!</span>
              </div>
            </div>
          </form>
          
                        <form class="bs-docs-example">
            <fieldset>
              <legend>Legend</legend>
              <label>Label name</label>
              <input type="text" placeholder="Type something…">
              <span class="help-block">Example block-level help text here.</span>
              <label class="checkbox">
                <input type="checkbox"> Check me out
              </label>
              <button type="submit" class="btn">Submit</button>
            </fieldset>
          </form>
                        
                        <div class="bs-docs-example">
                        <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Labels</th>
                <th>Markup</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span class="label">Default</span>
                </td>
                <td>
                  <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-success">Success</span>
                </td>
                <td>
                  <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-warning">Warning</span>
                </td>
                <td>
                  <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-important">Important</span>
                </td>
                <td>
                  <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-info">Info</span>
                </td>
                <td>
                  <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-inverse">Inverse</span>
                </td>
                <td>
                  <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
                </td>
              </tr>
            </tbody>
          </table>
                        Default	<span class="label">Default</span>
Success	<span class="label label-success">Success</span>
Warning	<span class="label label-warning">Warning</span>
Important	<span class="label label-important">Important</span>
Info	<span class="label label-info">Info</span>
Inverse	<span class="label label-inverse">Inverse</span>

            <ul class="media-list">
              <li class="media">
                <a class="pull-left" href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDklEQVR4Xu2YMYvCQBCFJ4VRC1OqrVhqOiHi37cQLcRO7ASxVYioTTR3szBhzeVgd9UQyEsVzGbcffvmfUm80+mUUo0PDwLAAWgBZECNM5AQgqAAKAAKgAKgQI0VAAaBQWAQGAQGawwBvAwBg8AgMAgMAoPAYI0VAAbfweDvvbTZbOj5fCoPtVotiqKIGo1G5qkkSWg+n9Pj8aBer0dhGBr57Zu19Qk4O+BwONBut6NOp6MWXXSwMMvlkq7Xq7psKsA3a+fn6SSAvqvj8Zj6/X6hAOv1mngngyCgOI6VAKPRKBNFxJMFs4MmkwktFgvlGNvapu562wF5e0pBfYe32y0dj0e1iPP5rM7lui4gC7Lf7+l2u9FsNqP7/f7SVra1jfpLG+TkAH3H2P6e52V9PhgMyPd91R58PhwOScTQBZIaMhcZ+4naNiJ8RAAOPbF7t9tVPS99n5+Mnhlyj/5bXgDX2qYiOAkgLZCmqbJtu93OBCgKOhsHfKK26eJ5nJMAerpzj/OuS9oXBVdeAMkArjOdTmm1WimUspjNZvOllm1tm8U7C8A3FgXhf5jTBdApIOPlujxHXC6XP0FoUrs0CtiqXOXxTi1Q5QXZzg0CvPMuYKt2FcfDAXAAPorioyg+ilYxncuaEygACoACoAAoUFbiVvF/QAFQABQABUCBKqZzWXMCBUABUAAUqDUFfgAL7YSfQrLznAAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                  <!-- Nested media object -->
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDklEQVR4Xu2YMYvCQBCFJ4VRC1OqrVhqOiHi37cQLcRO7ASxVYioTTR3szBhzeVgd9UQyEsVzGbcffvmfUm80+mUUo0PDwLAAWgBZECNM5AQgqAAKAAKgAKgQI0VAAaBQWAQGAQGawwBvAwBg8AgMAgMAoPAYI0VAAbfweDvvbTZbOj5fCoPtVotiqKIGo1G5qkkSWg+n9Pj8aBer0dhGBr57Zu19Qk4O+BwONBut6NOp6MWXXSwMMvlkq7Xq7psKsA3a+fn6SSAvqvj8Zj6/X6hAOv1mngngyCgOI6VAKPRKBNFxJMFs4MmkwktFgvlGNvapu562wF5e0pBfYe32y0dj0e1iPP5rM7lui4gC7Lf7+l2u9FsNqP7/f7SVra1jfpLG+TkAH3H2P6e52V9PhgMyPd91R58PhwOScTQBZIaMhcZ+4naNiJ8RAAOPbF7t9tVPS99n5+Mnhlyj/5bXgDX2qYiOAkgLZCmqbJtu93OBCgKOhsHfKK26eJ5nJMAerpzj/OuS9oXBVdeAMkArjOdTmm1WimUspjNZvOllm1tm8U7C8A3FgXhf5jTBdApIOPlujxHXC6XP0FoUrs0CtiqXOXxTi1Q5QXZzg0CvPMuYKt2FcfDAXAAPorioyg+ilYxncuaEygACoACoAAoUFbiVvF/QAFQABQABUCBKqZzWXMCBUABUAAUqDUFfgAL7YSfQrLznAAAAABJRU5ErkJggg==">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Nested media heading</h4>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      <!-- Nested media object -->
                      <div class="media">
                        <a class="pull-left" href="#">
                          <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDklEQVR4Xu2YMYvCQBCFJ4VRC1OqrVhqOiHi37cQLcRO7ASxVYioTTR3szBhzeVgd9UQyEsVzGbcffvmfUm80+mUUo0PDwLAAWgBZECNM5AQgqAAKAAKgAKgQI0VAAaBQWAQGAQGawwBvAwBg8AgMAgMAoPAYI0VAAbfweDvvbTZbOj5fCoPtVotiqKIGo1G5qkkSWg+n9Pj8aBer0dhGBr57Zu19Qk4O+BwONBut6NOp6MWXXSwMMvlkq7Xq7psKsA3a+fn6SSAvqvj8Zj6/X6hAOv1mngngyCgOI6VAKPRKBNFxJMFs4MmkwktFgvlGNvapu562wF5e0pBfYe32y0dj0e1iPP5rM7lui4gC7Lf7+l2u9FsNqP7/f7SVra1jfpLG+TkAH3H2P6e52V9PhgMyPd91R58PhwOScTQBZIaMhcZ+4naNiJ8RAAOPbF7t9tVPS99n5+Mnhlyj/5bXgDX2qYiOAkgLZCmqbJtu93OBCgKOhsHfKK26eJ5nJMAerpzj/OuS9oXBVdeAMkArjOdTmm1WimUspjNZvOllm1tm8U7C8A3FgXhf5jTBdApIOPlujxHXC6XP0FoUrs0CtiqXOXxTi1Q5QXZzg0CvPMuYKt2FcfDAXAAPorioyg+ilYxncuaEygACoACoAAoUFbiVvF/QAFQABQABUCBKqZzWXMCBUABUAAUqDUFfgAL7YSfQrLznAAAAABJRU5ErkJggg==">
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Nested media heading</h4>
                          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Nested media object -->
                  <div class="media">
                    <a class="pull-left" href="#">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDklEQVR4Xu2YMYvCQBCFJ4VRC1OqrVhqOiHi37cQLcRO7ASxVYioTTR3szBhzeVgd9UQyEsVzGbcffvmfUm80+mUUo0PDwLAAWgBZECNM5AQgqAAKAAKgAKgQI0VAAaBQWAQGAQGawwBvAwBg8AgMAgMAoPAYI0VAAbfweDvvbTZbOj5fCoPtVotiqKIGo1G5qkkSWg+n9Pj8aBer0dhGBr57Zu19Qk4O+BwONBut6NOp6MWXXSwMMvlkq7Xq7psKsA3a+fn6SSAvqvj8Zj6/X6hAOv1mngngyCgOI6VAKPRKBNFxJMFs4MmkwktFgvlGNvapu562wF5e0pBfYe32y0dj0e1iPP5rM7lui4gC7Lf7+l2u9FsNqP7/f7SVra1jfpLG+TkAH3H2P6e52V9PhgMyPd91R58PhwOScTQBZIaMhcZ+4naNiJ8RAAOPbF7t9tVPS99n5+Mnhlyj/5bXgDX2qYiOAkgLZCmqbJtu93OBCgKOhsHfKK26eJ5nJMAerpzj/OuS9oXBVdeAMkArjOdTmm1WimUspjNZvOllm1tm8U7C8A3FgXhf5jTBdApIOPlujxHXC6XP0FoUrs0CtiqXOXxTi1Q5QXZzg0CvPMuYKt2FcfDAXAAPorioyg+ilYxncuaEygACoACoAAoUFbiVvF/QAFQABQABUCBKqZzWXMCBUABUAAUqDUFfgAL7YSfQrLznAAAAABJRU5ErkJggg==">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Nested media heading</h4>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    </div>
                  </div>
                </div>
              </li>
              <li class="media">
                <a class="pull-right" href="#">
                  <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 64px; height: 64px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDklEQVR4Xu2YMYvCQBCFJ4VRC1OqrVhqOiHi37cQLcRO7ASxVYioTTR3szBhzeVgd9UQyEsVzGbcffvmfUm80+mUUo0PDwLAAWgBZECNM5AQgqAAKAAKgAKgQI0VAAaBQWAQGAQGawwBvAwBg8AgMAgMAoPAYI0VAAbfweDvvbTZbOj5fCoPtVotiqKIGo1G5qkkSWg+n9Pj8aBer0dhGBr57Zu19Qk4O+BwONBut6NOp6MWXXSwMMvlkq7Xq7psKsA3a+fn6SSAvqvj8Zj6/X6hAOv1mngngyCgOI6VAKPRKBNFxJMFs4MmkwktFgvlGNvapu562wF5e0pBfYe32y0dj0e1iPP5rM7lui4gC7Lf7+l2u9FsNqP7/f7SVra1jfpLG+TkAH3H2P6e52V9PhgMyPd91R58PhwOScTQBZIaMhcZ+4naNiJ8RAAOPbF7t9tVPS99n5+Mnhlyj/5bXgDX2qYiOAkgLZCmqbJtu93OBCgKOhsHfKK26eJ5nJMAerpzj/OuS9oXBVdeAMkArjOdTmm1WimUspjNZvOllm1tm8U7C8A3FgXhf5jTBdApIOPlujxHXC6XP0FoUrs0CtiqXOXxTi1Q5QXZzg0CvPMuYKt2FcfDAXAAPorioyg+ilYxncuaEygACoACoAAoUFbiVvF/QAFQABQABUCBKqZzWXMCBUABUAAUqDUFfgAL7YSfQrLznAAAAABJRU5ErkJggg==">
                </a>
                <div class="media-body">
                  <h4 class="media-heading">Media heading</h4>
                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                </div>
              </li>
            </ul>
          </div>
                        <div class="bs-docs-example se">
          <span class="label label-inverse">Inverse</span>
          
          <div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Best check yo self, you're not...
</div>

<div class="progress progress-striped active">
  <div class="bar" style="width: 40%;"></div>
</div>
<button class="close">&times;</button>
<a href="#" data-toggle="tooltip" title="first tooltip">hover over me</a>

<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 
 
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
    <iframe style="width:100%; height:1100px;" frameborder="0" src="localhost"></iframe>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
  </div>
</div>


          <small>Subtext for header</small>
          <div class="alert">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>
          <span class="badge badge-warning">4</span>
          <p>Toggleable, contextual menu for<code> displaying </code>lists <span class="label">Default</span>  <span class="label label-important">Important</span>
Info	<span class="label label-info">Info</span> of links. Made interactive with the <a href="./javascript.html#dropdowns">dropdown JavaScript plugin</a>.</p>

          <div class="pagination">
  <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>
            <div class="dropdown clearfix">
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
                <li><a tabindex="-1" href="#">Action</a></li>
                <li><a tabindex="-1" href="#">Another action</a></li>
                <li><a tabindex="-1" href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#">Separated link</a></li>
              </ul>
            </div>
          </div>
          
                            <div class="maniphest-task-group">
                                <h1 class="maniphest-task-group-header" data-sigil="task-group" data-meta="0_0">
                                    Needs Triage (21)
                                </h1>
                                
                                
                                <ul class="phui-object-item-list-view phui-object-list-cards phui-object-list-flush ">
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_1" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3875/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            
                                            
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3875
                                                    </span>
                                                    <a href="/T3875" class="phui-object-item-link">`arc land` should rebase any derived branches</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Thu, Oct 3, 12:54 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_2" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3855/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3855
                                                    </span>
                                                    <a href="/T3855" class="phui-object-item-link">`arc land` should work when the current branch/bookmark and the target branch/bookmark are the same</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Mon, Sep 23, 6:52 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/mikey.rutherford/" class="phui-link-person">mikey.rutherford</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_3" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3848/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3848
                                                    </span>
                                                    <a href="/T3848" class="phui-object-item-link">PhabricatorTaskmasterDaemon using stupid amounts of RAM</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Fri, Sep 20, 12:57 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_4" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3127/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3127
                                                    </span>
                                                    <a href="/T3127" class="phui-object-item-link">Sometimes color highlighting doesn&#039;t work on differential</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 12:20 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_5" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3742/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3742
                                                    </span>
                                                    <a href="/T3742" class="phui-object-item-link">Idea - re-work Files product as it pertains to Macro, Pholio, and more</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 1:58 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/btrahan/" class="phui-link-person">btrahan</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/57/" class="phabricator-project-tag">Files</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_6" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3804/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3804
                                                    </span>
                                                    <a href="/T3804" class="phui-object-item-link">Attempt to convert hunks to ASCII by default when doing `arc diff` if non-UTF8 characters are found</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Fri, Sep 6, 1:38 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_7" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3770/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3770
                                                    </span>
                                                    <a href="/T3770" class="phui-object-item-link">`arc land` does not wait long enough for git to release `index.lock`</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 28 2013, 4:48 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_8" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3752/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3752
                                                    </span>
                                                    <a href="/T3752" class="phui-object-item-link">&quot;arc patch&quot; fails to create files included in diff (with svn source)</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 28 2013, 2:33 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_9" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3089/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3089
                                                    </span>
                                                    <a href="/T3089" class="phui-object-item-link">Using &#039;arc diff&#039; after sending diffs through the web UI breaks the diff view.</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 22 2013, 10:08 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/mdjbxz/" class="phui-link-person">mdjbxz</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_10" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3521/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3521
                                                    </span>
                                                    <a href="/T3521" class="phui-object-item-link">HG repository expected to be a file </a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 14 2013, 8:34 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_11" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3669/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3669
                                                    </span>
                                                    <a href="/T3669" class="phui-object-item-link">Make it easier to remember to submit inline comments when updating a diff</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 14 2013, 8:35 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_12" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3642/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3642
                                                    </span>
                                                    <a href="/T3642" class="phui-object-item-link">inheritance for task status based on dependencies </a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 31 2013, 10:29 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_13" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3542/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3542
                                                    </span>
                                                    <a href="/T3542" class="phui-object-item-link">Creating Slowvote dynamic response count</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 8 2013, 4:42 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/cihadoge/" class="phui-link-person">cihadoge</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                            <a href="/project/view/918/" class="phabricator-project-tag">Slowvote</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_14" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3628/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3628
                                                    </span>
                                                    <a href="/T3628" class="phui-object-item-link">See equivalent curl request for a given query</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 28 2013, 10:35 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/237/" class="phabricator-project-tag">Conduit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_15" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3637/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3637
                                                    </span>
                                                    <a href="/T3637" class="phui-object-item-link">Can&#039;t view commit descriptions in History table on mobile device</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 28 2013, 10:08 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/9/" class="phabricator-project-tag">Diffusion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_16" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3535/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3535
                                                    </span>
                                                    <a href="/T3535" class="phui-object-item-link">Include ArcanistProject in differential.query</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 15 2013, 5:14 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_17" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3508/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3508
                                                    </span>
                                                    <a href="/T3508" class="phui-object-item-link">Improve the feed view with latest infos of the object changed</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 10 2013, 5:29 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/174/" class="phabricator-project-tag">Feed</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_18" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3924/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3924
                                                    </span>
                                                    <a href="/T3924" class="phui-object-item-link">cxvxcvxcvxcvxv</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sun, Oct 6, 12:49 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/151/" class="phabricator-project-tag">Celerity</a>
                                                            <a href="/project/view/1305/" class="phabricator-project-tag">zxczx</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_19" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3917/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3917
                                                    </span>
                                                    <a href="/T3917" class="phui-object-item-link">Avoid or easily handle &#039;duplicate&#039; audits</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Fri, Oct 4, 8:16 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/217/" class="phabricator-project-tag">Audit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_20" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3908/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3908
                                                    </span>
                                                    <a href="/T3908" class="phui-object-item-link">bin/search ignores --background and --foreground arguments</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Oct 2, 12:46 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-violet phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_21" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3880/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3880
                                                    </span>
                                                    <a href="/T3880" class="phui-object-item-link">Provide a simple API for accessing custom fields on an object</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 25, 9:09 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                            <a href="/project/view/8/" class="phabricator-project-tag">Maniphest</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="maniphest-task-group">
                                <h1 class="maniphest-task-group-header" data-sigil="task-group" data-meta="0_22">
                                    High (6)
                                </h1>
                                <ul class="phui-object-item-list-view phui-object-list-cards phui-object-list-flush ">
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-red phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_23" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/2776/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T2776
                                                    </span>
                                                    <a href="/T2776" class="phui-object-item-link">Phacility (High Priority)</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 3 2013, 5:22 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/40/" class="phabricator-project-tag">Phacility</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-red phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_24" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3120/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3120
                                                    </span>
                                                    <a href="/T3120" class="phui-object-item-link">Launch New Corporate Site</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Tue, Sep 24, 5:00 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/chad/" class="phui-link-person">chad</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/40/" class="phabricator-project-tag">Phacility</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-red phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_25" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/2465/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T2465
                                                    </span>
                                                    <a href="/T2465" class="phui-object-item-link">Context not available for revisions created on Windows </a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Feb 1 2013, 12:18 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-red phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_26" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/2683/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T2683
                                                    </span>
                                                    <a href="/T2683" class="phui-object-item-link">Improve the performance of Diffusion browse views</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 21 2013, 9:21 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/9/" class="phabricator-project-tag">Diffusion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-red phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_27" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/2772/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T2772
                                                    </span>
                                                    <a href="/T2772" class="phui-object-item-link">Phacility (Blockers)</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 15 2013, 4:29 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/40/" class="phabricator-project-tag">Phacility</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-red phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_28" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/603/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T603
                                                    </span>
                                                    <a href="/T603" class="phui-object-item-link">Support permissions/policies in all Phabricator applications</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sat, Oct 5, 7:56 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/147/" class="phabricator-project-tag">Permissions</a>
                                                            <a href="/project/view/404/" class="phabricator-project-tag">Wikimedia</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="maniphest-task-group">
                                <h1 class="maniphest-task-group-header" data-sigil="task-group" data-meta="0_29">
                                    Normal (73)
                                </h1>
                                <ul class="phui-object-item-list-view phui-object-list-cards phui-object-list-flush ">
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_30" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3872/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3872
                                                    </span>
                                                    <a href="/T3872" class="phui-object-item-link">Tighten &quot;fixes&quot; regexp when parsing commits</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Mon, Sep 23, 7:29 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/36/" class="phabricator-project-tag">Remarkup</a>
                                                            <a href="/project/view/8/" class="phabricator-project-tag">Maniphest</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_31" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3868/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3868
                                                    </span>
                                                    <a href="/T3868" class="phui-object-item-link">When a text field value starts with &quot;http://&quot; or &quot;https://&quot;, it should automatically be converted to a link</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 25, 9:22 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/8/" class="phabricator-project-tag">Maniphest</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_32" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3870/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3870
                                                    </span>
                                                    <a href="/T3870" class="phui-object-item-link">Upgrade Phrequent to support new search infrastructure</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Tue, Oct 1, 8:16 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/hach-que/" class="phui-link-person">hach-que</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/938/" class="phabricator-project-tag">Phrequent</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_33" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3857/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3857
                                                    </span>
                                                    <a href="/T3857" class="phui-object-item-link">Move search indexing to the daemons</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Oct 2, 12:46 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/146/" class="phabricator-project-tag">Daemons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_34" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">


                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3846/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3846
                                                    </span>
                                                    <a href="/T3846" class="phui-object-item-link">Build reply handler functionality</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 18, 9:23 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/406/" class="phabricator-project-tag">Ponder</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_35" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3820/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3820
                                                    </span>
                                                    <a href="/T3820" class="phui-object-item-link">How should projects imply policies?</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Fri, Oct 4, 12:53 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/147/" class="phabricator-project-tag">Permissions</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_37" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3818/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3818
                                                    </span>
                                                    <a href="/T3818" class="phui-object-item-link">Remove `actAsUser` from Conduit</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 4:39 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                            <a href="/project/view/147/" class="phabricator-project-tag">Permissions</a>
                                                            <span class="phabricator-project-tag" data-sigil="has-tooltip" data-meta="0_36">
                                                                …
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_38" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3817/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3817
                                                    </span>
                                                    <a href="/T3817" class="phui-object-item-link">Undo weird junk added to fix Maniphest Custom Query Fatal</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 3:53 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/8/" class="phabricator-project-tag">Maniphest</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_39" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3815/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3815
                                                    </span>
                                                    <a href="/T3815" class="phui-object-item-link">Make `arc liberate` throw an error when it encounters a namespace definition</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Tue, Sep 10, 11:26 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_40" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3801/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3801
                                                    </span>
                                                    <a href="/T3801" class="phui-object-item-link">Consolidate binary file handling in `arc diff`</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Oct 2, 1:46 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_41" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3793/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3793
                                                    </span>
                                                    <a href="/T3793" class="phui-object-item-link">Examine `next_uri` handling and revert D4012</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 3:56 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/275/" class="phabricator-project-tag">Auth</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_43" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3795/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3795
                                                    </span>
                                                    <a href="/T3795" class="phui-object-item-link">Remove DifferentialRevisionDetailRenderer</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Tue, Sep 10, 9:58 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                            <a href="/project/view/44/" class="phabricator-project-tag">Facebook</a>
                                                            <span class="phabricator-project-tag" data-sigil="has-tooltip" data-meta="0_42">
                                                                …
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_44" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3794/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3794
                                                    </span>
                                                    <a href="/T3794" class="phui-object-item-link">Rebuild all custom fields on top of CustomField infrastructure</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Thu, Sep 26, 3:35 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1268/" class="phabricator-project-tag">Custom Fields</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_45" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3788/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3788
                                                    </span>
                                                    <a href="/T3788" class="phui-object-item-link">Improve encoding management in Diffusion</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 2:01 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/9/" class="phabricator-project-tag">Diffusion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_46" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3771/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3771
                                                    </span>
                                                    <a href="/T3771" class="phui-object-item-link">Configured lint engine &#039;ArcanistPhpcsLinter&#039; is not a subclass of &#039;ArcanistLintEngine&#039;.</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 29 2013, 1:48 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_47" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3732/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3732
                                                    </span>
                                                    <a href="/T3732" class="phui-object-item-link">ExternalAccount has a restrictive visibility policy which prevents objects from loading for rendering in transactions</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 1 2013, 12:52 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_48" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3741/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3741
                                                    </span>
                                                    <a href="/T3741" class="phui-object-item-link">Registration form doesn&#039;t respect PhabricatorRegistrationProfile-&gt;getCanEditUsername();</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Thu, Sep 26, 6:38 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/426/" class="phabricator-project-tag">People</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_49" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3722/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3722
                                                    </span>
                                                    <a href="/T3722" class="phui-object-item-link">Denormalize status and severity in Releeph</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_50" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3718/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3718
                                                    </span>
                                                    <a href="/T3718" class="phui-object-item-link">Use PhabricatorCustomField in Releeph</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 4 2013, 3:32 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_51" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3738/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3738
                                                    </span>
                                                    <a href="/T3738" class="phui-object-item-link">Remove ReleephUserView</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/LegNeato/" class="phui-link-person">LegNeato</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_52" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3692/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3692
                                                    </span>
                                                    <a href="/T3692" class="phui-object-item-link">Minor improvements to Flags</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 13 2013, 9:41 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/395/" class="phabricator-project-tag">Flags</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_53" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3687/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3687
                                                    </span>
                                                    <a href="/T3687" class="phui-object-item-link">JIRA Integration</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Tue, Sep 10, 10:22 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_54" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3663/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3663
                                                    </span>
                                                    <a href="/T3663" class="phui-object-item-link">Use ApplicationTransactions for ReleephProject</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_55" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3662/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3662
                                                    </span>
                                                    <a href="/T3662" class="phui-object-item-link">Which Releeph Conduit APIs are currently in use?</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/LegNeato/" class="phui-link-person">LegNeato</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_56" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3659/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3659
                                                    </span>
                                                    <a href="/T3659" class="phui-object-item-link">Can we get rid of Releeph &quot;Authors&quot; rules?</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/LegNeato/" class="phui-link-person">LegNeato</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_57" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3658/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3658
                                                    </span>
                                                    <a href="/T3658" class="phui-object-item-link">Can we remove the &quot;Release counter&quot; field?</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/LegNeato/" class="phui-link-person">LegNeato</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_58" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3657/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3657
                                                    </span>
                                                    <a href="/T3657" class="phui-object-item-link">Fix Releeph URI construction so all project names are valid</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_59" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3655/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3655
                                                    </span>
                                                    <a href="/T3655" class="phui-object-item-link">Delete `repositoryID` from ReleephProject and fix use of ID/PHID</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_60" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3649/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3649
                                                    </span>
                                                    <a href="/T3649" class="phui-object-item-link">Allow Releeph branches to have subset/track relationships </a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_61" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3648/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3648
                                                    </span>
                                                    <a href="/T3648" class="phui-object-item-link">Build ETL-based stats for Releeph</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_62" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3647/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3647
                                                    </span>
                                                    <a href="/T3647" class="phui-object-item-link">Sort out request severities in Releeph</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_63" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3646/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3646
                                                    </span>
                                                    <a href="/T3646" class="phui-object-item-link">Remove &quot;trunk&quot; from Releeph Projects</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_64" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3644/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3644
                                                    </span>
                                                    <a href="/T3644" class="phui-object-item-link">Rename &quot;Pick Request&quot; / &quot;Releeph Request&quot; to &quot;Pull Request&quot;</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:15 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/822/" class="phabricator-project-tag">Releeph</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_65" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3639/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3639
                                                    </span>
                                                    <a href="/T3639" class="phui-object-item-link">Don&#039;t eat unsaved inline comments</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 29 2013, 2:59 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/217/" class="phabricator-project-tag">Audit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_66" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3629/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3629
                                                    </span>
                                                    <a href="/T3629" class="phui-object-item-link">Comment doesn&#039;t clear after posting via app transactions</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 26 2013, 6:30 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/583/" class="phabricator-project-tag">Transactions</a>
                                                            <a href="/project/view/519/" class="phabricator-project-tag">Pholio</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_67" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3626/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3626
                                                    </span>
                                                    <a href="/T3626" class="phui-object-item-link">Detection of language for &quot;Makefile&quot; isn&#039;t good</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 26 2013, 5:16 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/7/" class="phabricator-project-tag">Easy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_68" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3619/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3619
                                                    </span>
                                                    <a href="/T3619" class="phui-object-item-link">Reject mixed-mode SSH/SCP domains in Repository configuration</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 1:45 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/141/" class="phabricator-project-tag">Repositories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_69" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3623/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3623
                                                    </span>
                                                    <a href="/T3623" class="phui-object-item-link">Explore designs of &#039;Quick Create&#039; button, rules</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 26 2013, 8:19 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/chad/" class="phui-link-person">chad</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/483/" class="phabricator-project-tag">Design</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_70" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/2898/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T2898
                                                    </span>
                                                    <a href="/T2898" class="phui-object-item-link">Redesign Calendar for responsive layouts</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 12 2013, 4:48 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/chad/" class="phui-link-person">chad</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/542/" class="phabricator-project-tag">Calendar</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_72" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3116/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3116
                                                    </span>
                                                    <a href="/T3116" class="phui-object-item-link">Build &quot;Legalpad&quot;, for tracking license agreements</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 1:45 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/btrahan/" class="phui-link-person">btrahan</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                            <a href="/project/view/1036/" class="phabricator-project-tag">Legal</a>
                                                            <span class="phabricator-project-tag" data-sigil="has-tooltip" data-meta="0_71">
                                                                …
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_73" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3583/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3583
                                                    </span>
                                                    <a href="/T3583" class="phui-object-item-link">Fix the Swamp of Suck that is the home page content panel</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 25, 8:46 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_74" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3562/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3562
                                                    </span>
                                                    <a href="/T3562" class="phui-object-item-link">Design Meme/Macro Picker</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Tue, Oct 1, 3:58 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/chad/" class="phui-link-person">chad</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                            <a href="/project/view/283/" class="phabricator-project-tag">Image Macros</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_75" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3519/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3519
                                                    </span>
                                                    <a href="/T3519" class="phui-object-item-link">Fix parsing of a crazy nonsense directory rename in SVN</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 11 2013, 2:19 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/141/" class="phabricator-project-tag">Repositories</a>
                                                            <a href="/project/view/128/" class="phabricator-project-tag">Subversion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_76" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3578/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3578
                                                    </span>
                                                    <a href="/T3578" class="phui-object-item-link">Unbeta Ponder</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 18, 9:23 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/406/" class="phabricator-project-tag">Ponder</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_77" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3497/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3497
                                                    </span>
                                                    <a href="/T3497" class="phui-object-item-link">Support drafts in Conpherence</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 12 2013, 4:56 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/608/" class="phabricator-project-tag">Conpherence</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_78" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3496/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3496
                                                    </span>
                                                    <a href="/T3496" class="phui-object-item-link">Add `objectPHID` to the drafts table</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 11 2013, 9:52 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_79" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3472/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3472
                                                    </span>
                                                    <a href="/T3472" class="phui-object-item-link">Roadblock users for email issues before registration</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 1 2013, 8:51 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/275/" class="phabricator-project-tag">Auth</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_80" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3471/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3471
                                                    </span>
                                                    <a href="/T3471" class="phui-object-item-link">Be more conservative in overwriting `phcid`</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sun, Sep 8, 2:16 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/275/" class="phabricator-project-tag">Auth</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_81" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3466/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3466
                                                    </span>
                                                    <a href="/T3466" class="phui-object-item-link">Have daemons warn if one command runs for too long</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 5 2013, 2:59 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/146/" class="phabricator-project-tag">Daemons</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_82" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3463/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3463
                                                    </span>
                                                    <a href="/T3463" class="phui-object-item-link">Provide mailinglist info via the API</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 28 2013, 2:28 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/237/" class="phabricator-project-tag">Conduit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_83" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3462/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3462
                                                    </span>
                                                    <a href="/T3462" class="phui-object-item-link">Show &quot;Branch: featurename (branched from master)&quot; in Differential</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 27 2013, 9:11 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                            <a href="/project/view/7/" class="phabricator-project-tag">Easy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_84" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3434/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3434
                                                    </span>
                                                    <a href="/T3434" class="phui-object-item-link">default project on metamta.maniphest.public-create-email?</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 9 2013, 3:04 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_85" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3405/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3405
                                                    </span>
                                                    <a href="/T3405" class="phui-object-item-link">Warn or fix if Git repository remote &quot;origin&quot; user names differ from configured usernames</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Wed, Sep 11, 1:44 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/141/" class="phabricator-project-tag">Repositories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_86" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3427/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3427
                                                    </span>
                                                    <a href="/T3427" class="phui-object-item-link">Setup issues div pushes down Conpherence</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 20 2013, 10:17 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/608/" class="phabricator-project-tag">Conpherence</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_88" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3416/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3416
                                                    </span>
                                                    <a href="/T3416" class="phui-object-item-link">Commit parser fails for empty (?) commits</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 19 2013, 9:31 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/9/" class="phabricator-project-tag">Diffusion</a>
                                                            <a href="/project/view/44/" class="phabricator-project-tag">Facebook</a>
                                                            <span class="phabricator-project-tag" data-sigil="has-tooltip" data-meta="0_87">
                                                                …
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_89" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3415/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3415
                                                    </span>
                                                    <a href="/T3415" class="phui-object-item-link">Creating a new revision from another user&#039;s diff does not update the authorship of the details and test plan</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sat, Sep 14, 10:06 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_90" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3404/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3404
                                                    </span>
                                                    <a href="/T3404" class="phui-object-item-link">Warn if the user configures public email addresses which match user email addresses</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 17 2013, 12:29 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/38/" class="phabricator-project-tag">MetaMTA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_91" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/1805/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T1805
                                                    </span>
                                                    <a href="/T1805" class="phui-object-item-link">Copying code from Chrome in Differential adds trailing tabs</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 17 2013, 7:52 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                            <a href="/project/view/7/" class="phabricator-project-tag">Easy</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_92" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3287/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3287
                                                    </span>
                                                    <a href="/T3287" class="phui-object-item-link">Merging duplicate tasks doesn&#039;t migrate dependencies</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 10 2013, 1:49 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/blc/" class="phui-link-person">blc</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/8/" class="phabricator-project-tag">Maniphest</a>
                                                            <a href="/project/view/1179/" class="phabricator-project-tag">Hard</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_93" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/1960/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T1960
                                                    </span>
                                                    <a href="/T1960" class="phui-object-item-link">Breadcrumbs or similar UI-navigation for getting back to the ticket overview</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 1 2013, 8:47 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/8/" class="phabricator-project-tag">Maniphest</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_94" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3274/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3274
                                                    </span>
                                                    <a href="/T3274" class="phui-object-item-link">Add Text Macro Generator to Phabricator / Remarkup</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 21 2013, 9:02 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/codeblock/" class="phui-link-person">codeblock</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/36/" class="phabricator-project-tag">Remarkup</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_95" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3265/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3265
                                                    </span>
                                                    <a href="/T3265" class="phui-object-item-link">When we permanently delete data, log how and why</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 29 2013, 1:29 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_96" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3238/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3238
                                                    </span>
                                                    <a href="/T3238" class="phui-object-item-link">Make sure the user really entered the SVN root directory</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 23 2013, 3:58 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/141/" class="phabricator-project-tag">Repositories</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_97" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3186/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3186
                                                    </span>
                                                    <a href="/T3186" class="phui-object-item-link">Make &quot;run an external script and interpret the results&quot; a formally supported linter archetype</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 29 2013, 1:48 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/2/" class="phabricator-project-tag">Arcanist</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_98" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3234/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3234
                                                    </span>
                                                    <a href="/T3234" class="phui-object-item-link">Add an &quot;Email Project&quot; action to Herald</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 22 2013, 4:22 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/24/" class="phabricator-project-tag">Herald</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_99" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3216/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3216
                                                    </span>
                                                    <a href="/T3216" class="phui-object-item-link">&quot;Browse in Diffusion&quot; always going to default branch</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 27 2013, 6:14 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1/" class="phabricator-project-tag">Differential</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_100" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3217/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3217
                                                    </span>
                                                    <a href="/T3217" class="phui-object-item-link">Formalize repositories in an &quot;importing&quot; state and disable publishing until they import</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jul 12 2013, 1:08 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/217/" class="phabricator-project-tag">Audit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_101" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3190/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3190
                                                    </span>
                                                    <a href="/T3190" class="phui-object-item-link">Provide a way to reference projects in Remarkup</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 18 2013, 10:52 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/36/" class="phabricator-project-tag">Remarkup</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_102" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3189/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3189
                                                    </span>
                                                    <a href="/T3189" class="phui-object-item-link">[feature request] Tag commits</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 12 2013, 5:16 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <span class="phabricator-project-tag phabricator-project-tag-grey">
                                                                No Project
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_103" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/2946/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T2946
                                                    </span>
                                                    <a href="/T2946" class="phui-object-item-link">Diffusion: slow history in big Git repos</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Sep 3 2013, 11:43 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/9/" class="phabricator-project-tag">Diffusion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_104" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3178/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3178
                                                    </span>
                                                    <a href="/T3178" class="phui-object-item-link">Migrating from JIRA, Atlassian products in general</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Jun 26 2013, 8:48 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/1180/" class="phabricator-project-tag">Doorkeeper</a>
                                                            <a href="/project/view/3/" class="phabricator-project-tag">Phabricator</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_105" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3165/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3165
                                                    </span>
                                                    <a href="/T3165" class="phui-object-item-link">Provide Search in Conpherence</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                Aug 16 2013, 11:14 PM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/btrahan/" class="phui-link-person">btrahan</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/608/" class="phabricator-project-tag">Conpherence</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phui-object-item phui-object-item-with-icons phui-object-item-with-attrs phui-object-item-bar-color-orange phui-object-item-with-bylines phui-object-item-with-actions phui-object-item-with-1-actions phui-object-item-grippable "
                                    data-meta="0_106" data-sigil="maniphest-task">
                                        <div class="phui-object-item-frame">
                                            <ul class="phui-object-item-actions">
                                                <li class="phui-list-item-view phui-list-item-type-link phui-list-item-has-icon "
                                                data-sigil="maniphest-edit-task">
                                                    <a href="/maniphest/task/edit/3141/" class="phui-list-item-href"><span class="phui-icon-view sprite-icons icons-edit phui-list-item-icon"></span></a>
                                                </li>
                                            </ul>
                                            <div class="phui-object-item-content-box">
                                                <div class="phui-object-item-grip">
                                                </div>
                                                <div class="phui-object-item-name" data-sigil="slippery">
                                                    <span class="phui-object-item-objname">
                                                        T3141
                                                    </span>
                                                    <a href="/T3141" class="phui-object-item-link">Improve general stability/sanity of Diffusion file content queries</a>
                                                </div>
                                                <div class="phui-object-icon-pane">
                                                    <ul class="phui-object-item-icons">
                                                        <li class="phui-object-item-icon phui-object-item-icon-none">
                                                            <span class="phui-object-item-icon-label">
                                                                May 13 2013, 1:51 AM
                                                            </span>
                                                            <span class="phui-object-item-icon-image sprite-icons icons-none">
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="phui-object-item-bylines">
                                                    <div class="phui-object-item-byline">
                                                        Assigned:
                                                        <a href="/p/epriestley/" class="phui-link-person">epriestley</a>
                                                    </div>
                                                </div>
                                                <div class="phui-object-item-content">
                                                    <ul class="phui-object-item-attributes">
                                                        <li class="phui-object-item-attribute">
                                                            <a href="/project/view/9/" class="phabricator-project-tag">Diffusion</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <form method="POST" action="/maniphest/batch/" id="batch-select-form">
                                <input type="hidden" name="__csrf__" value="B@pfrncfeg19f671ed9c54c4bf" />
                                <input type="hidden" name="__form__" value="1" />
                                <div class="maniphest-batch-editor">
                                    <div class="batch-editor-header">
                                        Batch Task Editor
                                    </div>
                                    <table class="maniphest-batch-editor-layout">
                                        <tr>
                                            <td>
                                                <a href="#" class="grey button" id="batch-select-all" data-mustcapture="1">Select All</a>
                                                <a href="#" class="grey button" id="batch-select-none" data-mustcapture="1">Clear Selection</a>
                                            </td>
                                            <td>
                                                <a href="/maniphest/export/open/" class="grey button">Export to Excel</a>
                                            </td>
                                            <td id="batch-select-status-cell">
                                            </td>
                                            <td class="batch-select-submit-cell">
                                                <button id="batch-select-submit" disabled="disabled" class="disabled">
                                                    Batch Edit Selected »
                                                </button>
                                                <div id="batch-select-id-container">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="phui-box phui-box-shadow ml ">
                            <div class="phui-box-inner pm">
                                <div class="aphront-pager-view">
                                    <a href="/maniphest/query/open/?after=3141.50">Next ›</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear: both;">
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://secure.phabricator.com/res/pkg/9564fa17/javelin.pkg.js">
        </script>
        <script type="text/javascript" src="https://secure.phabricator.com/res/pkg/64eeda79/core.pkg.js">
        </script>
        <script type="text/javascript" src="https://secure.phabricator.com/res/a251e72f/rsrc/js/application/maniphest/behavior-list-edit.js">
        </script>
        <script type="text/javascript" src="https://secure.phabricator.com/res/75c556db/rsrc/js/core/DraggableList.js">
        </script>
        <script type="text/javascript" src="https://secure.phabricator.com/res/pkg/0a694954/maniphest.pkg.js">
        </script>
        <div id="UQ0_40" style="position: absolute; width: 0; height: 0; overflow: hidden;">
        </div>
        <script type="text/javascript">
            JX.Stratcom.mergeData(0, [{
                "priority": "90"
            }, {
                "taskID": "3875"
            }, {
                "taskID": "3855"
            }, {
                "taskID": "3848"
            }, {
                "taskID": "3127"
            }, {
                "taskID": "3742"
            }, {
                "taskID": "3804"
            }, {
                "taskID": "3770"
            }, {
                "taskID": "3752"
            }, {
                "taskID": "3089"
            }, {
                "taskID": "3521"
            }, {
                "taskID": "3669"
            }, {
                "taskID": "3642"
            }, {
                "taskID": "3542"
            }, {
                "taskID": "3628"
            }, {
                "taskID": "3637"
            }, {
                "taskID": "3535"
            }, {
                "taskID": "3508"
            }, {
                "taskID": "3924"
            }, {
                "taskID": "3917"
            }, {
                "taskID": "3908"
            }, {
                "taskID": "3880"
            }, {
                "priority": "80"
            }, {
                "taskID": "2776"
            }, {
                "taskID": "3120"
            }, {
                "taskID": "2465"
            }, {
                "taskID": "2683"
            }, {
                "taskID": "2772"
            }, {
                "taskID": "603"
            }, {
                "priority": "50"
            }, {
                "taskID": "3872"
            }, {
                "taskID": "3868"
            }, {
                "taskID": "3870"
            }, {
                "taskID": "3857"
            }, {
                "taskID": "3846"
            }, {
                "taskID": "3820"
            }, {
                "tip": "Differential, Permissions, Security, Conduit",
                "size": 200
            }, {
                "taskID": "3818"
            }, {
                "taskID": "3817"
            }, {
                "taskID": "3815"
            }, {
                "taskID": "3801"
            }, {
                "taskID": "3793"
            }, {
                "tip": "Differential, Facebook, Releeph",
                "size": 200
            }, {
                "taskID": "3795"
            }, {
                "taskID": "3794"
            }, {
                "taskID": "3788"
            }, {
                "taskID": "3771"
            }, {
                "taskID": "3732"
            }, {
                "taskID": "3741"
            }, {
                "taskID": "3722"
            }, {
                "taskID": "3718"
            }, {
                "taskID": "3738"
            }, {
                "taskID": "3692"
            }, {
                "taskID": "3687"
            }, {
                "taskID": "3663"
            }, {
                "taskID": "3662"
            }, {
                "taskID": "3659"
            }, {
                "taskID": "3658"
            }, {
                "taskID": "3657"
            }, {
                "taskID": "3655"
            }, {
                "taskID": "3649"
            }, {
                "taskID": "3648"
            }, {
                "taskID": "3647"
            }, {
                "taskID": "3646"
            }, {
                "taskID": "3644"
            }, {
                "taskID": "3639"
            }, {
                "taskID": "3629"
            }, {
                "taskID": "3626"
            }, {
                "taskID": "3619"
            }, {
                "taskID": "3623"
            }, {
                "taskID": "2898"
            }, {
                "tip": "Phabricator, Legal, Legalpad",
                "size": 200
            }, {
                "taskID": "3116"
            }, {
                "taskID": "3583"
            }, {
                "taskID": "3562"
            }, {
                "taskID": "3519"
            }, {
                "taskID": "3578"
            }, {
                "taskID": "3497"
            }, {
                "taskID": "3496"
            }, {
                "taskID": "3472"
            }, {
                "taskID": "3471"
            }, {
                "taskID": "3466"
            }, {
                "taskID": "3463"
            }, {
                "taskID": "3462"
            }, {
                "taskID": "3434"
            }, {
                "taskID": "3405"
            }, {
                "taskID": "3427"
            }, {
                "tip": "Diffusion, Facebook, Repositories",
                "size": 200
            }, {
                "taskID": "3416"
            }, {
                "taskID": "3415"
            }, {
                "taskID": "3404"
            }, {
                "taskID": "1805"
            }, {
                "taskID": "3287"
            }, {
                "taskID": "1960"
            }, {
                "taskID": "3274"
            }, {
                "taskID": "3265"
            }, {
                "taskID": "3238"
            }, {
                "taskID": "3186"
            }, {
                "taskID": "3234"
            }, {
                "taskID": "3216"
            }, {
                "taskID": "3217"
            }, {
                "taskID": "3190"
            }, {
                "taskID": "3189"
            }, {
                "taskID": "2946"
            }, {
                "taskID": "3178"
            }, {
                "taskID": "3165"
            }, {
                "taskID": "3141"
            }, {
                "hideIDs": ["UQ0_25"],
                "showIDs": ["UQ0_27", "UQ0_26"]
            }, {
                "hideIDs": ["UQ0_27", "UQ0_26"],
                "showIDs": ["UQ0_25"]
            }, {
                "map": {
                    "UQ0_28": "phabricator-application-menu-expanded",
                    "UQ0_35": "menu-icon-app-blue"
                }
            }, {
                "map": {
                    "UQ0_28": "phabricator-search-menu-expanded",
                    "UQ0_36": "menu-icon-search-blue"
                }
            }]);
            JX.onload(function() {
                JX.initBehaviors({
                    "refresh-csrf": [{
                        "tokenName": "__csrf__",
                        "header": "X-Phabricator-Csrf",
                        "current": "B@pfrncfeg19f671ed9c54c4bf"
                    }],
                    "aphront-basic-tokenizer": [{
                        "id": "UQ0_4",
                        "src": "\/typeahead\/common\/accounts\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a user name..."
                    }, {
                        "id": "UQ0_6",
                        "src": "\/typeahead\/common\/projects\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a project name..."
                    }, {
                        "id": "UQ0_8",
                        "src": "\/typeahead\/common\/projects\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a project name..."
                    }, {
                        "id": "UQ0_9",
                        "src": "\/typeahead\/common\/projects\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a project name..."
                    }, {
                        "id": "UQ0_10",
                        "src": "\/typeahead\/common\/accounts\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a user name..."
                    }, {
                        "id": "UQ0_11",
                        "src": "\/typeahead\/common\/accounts\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a user name..."
                    }, {
                        "id": "UQ0_12",
                        "src": "\/typeahead\/common\/accounts\/",
                        "value": [],
                        "limit": null,
                        "ondemand": true,
                        "username": null,
                        "placeholder": "Type a user name..."
                    }],
                    "history-install": []
                })
            });
            JX.onload(function() {
                JX.initBehaviors({
                    "maniphest-list-editor": [],
                    "phabricator-tooltips": [],
                    "maniphest-subpriority-editor": [{
                        "uri": "\/maniphest\/subpriority\/"
                    }],
                    "maniphest-batch-selector": [{
                        "selectAll": "batch-select-all",
                        "selectNone": "batch-select-none",
                        "submit": "batch-select-submit",
                        "status": "batch-select-status-cell",
                        "idContainer": "batch-select-id-container",
                        "formID": "batch-select-form"
                    }],
                    "phabricator-reveal-content": [],
                    "workflow": [],
                    "lightbox-attachments": [{
                        "defaultImageUri": "https:\/\/secure.phabricator.com\/rsrc\/image\/icon\/fatcow\/document_black.png",
                        "downloadForm": "\u003cform action=\"#\" method=\"POST\" class=\"lightbox-download-form\" data-sigil=\"download\"\u003e\u003cinput type=\"hidden\" name=\"__csrf__\" value=\"B@pfrncfeg19f671ed9c54c4bf\" \/\u003e\u003cinput type=\"hidden\" name=\"__form__\" value=\"1\" \/\u003e\u003cbutton\u003eDownload\u003c\/button\u003e\u003c\/form\u003e"
                    }],
                    "aphront-form-disable-on-submit": [],
                    "toggle-class": [],
                    "konami": [],
                    "phabricator-gesture": [],
                    "device": [],
                    "aphlict-dropdown": [{
                        "bubbleID": "UQ0_29",
                        "countID": "UQ0_30",
                        "dropdownID": "UQ0_31",
                        "loadingText": "Loading...",
                        "uri": "\/conpherence\/panel\/"
                    }, {
                        "bubbleID": "UQ0_34",
                        "countID": "UQ0_32",
                        "dropdownID": "UQ0_33",
                        "loadingText": "Loading...",
                        "uri": "\/notification\/panel\/"
                    }],
                    "phabricator-keyboard-shortcuts": [{
                        "helpURI": "\/help\/keyboardshortcut\/",
                        "searchID": "UQ0_37"
                    }],
                    "phabricator-search-typeahead": [{
                        "id": "UQ0_38",
                        "input": "UQ0_37",
                        "src": "\/typeahead\/common\/mainsearch\/",
                        "limit": 10,
                        "placeholder": "Search"
                    }],
                    "aphlict-listen": [{
                        "id": "UQ0_39",
                        "containerID": "UQ0_40",
                        "server": "secure.phabricator.com",
                        "port": "22280",
                        "debug": false,
                        "pageObjects": []
                    }]
                })
            });
        </script>
        
          <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



    </body>

</html>