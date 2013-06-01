<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{if isset($title)}{$title}{elseif isset($error)}{$error}{else}Unknow title{/if}</title>
        <!-- FAVICON
            ================================================== -->
        <link rel="icon" href="{$smarty.const.DIR_TEMPLATE_VAR}/images/favicon.ico" />

        <!-- STYLES
            ================================================== -->
        <link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
                {if isset($esteregg_oblique)}transform: rotate(1deg) skewX(1deg);{/if}
            }

        </style>
        <link href="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        
        <!-- JAVASCRIPTS
            ================================================== -->
        <script src="{$smarty.const.DIR_TEMPLATE_VAR}/js/jquery.js"></script>
        <script src="{$smarty.const.DIR_TEMPLATE_VAR}/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- NAVBAR
            ================================================== -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <!-- Alternate button -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Brand -->
                    <a class="brand" href="#">phpbb-pastebin</a>
                    
                    <div class="nav-collapse collapse">
                        <!-- Left nav -->
                        <ul class="nav">
                            <!--<li><a href="index.php"><i class="icon-home icon-white"></i> {t}Home Page{/t}</a></li>-->
                            <li><a href="index.php?q=list"><i class="icon-book icon-white"></i> {t}Publc past list{/t}</a></li>
                            <li><a href="index.php?q=create"><i class="icon-plus icon-white"></i> {t}Add a new paste{/t}</a></li>
                        </ul>
{if $user_menu}
                        <!-- Right nav for users-->
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-white"></i> {t}Tools{/t}<b class="caret"></b></a><!-- aggiungere  icon-white?? -->
                                <ul class="dropdown-menu">
                                    <li><a href="index.php?q=pastesmanager"><i class="icon-book"></i> {t}Pastes manager{/t}</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index.php?q=pages/about"><i class="icon-info-sign"></i> {t}About{/t}</a></li>
                                </ul>
                            </li>
                        </ul>
{else}
                        <!-- Right nav for anon user -->
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench icon-white"></i> {t}Tools{/t}<b class="caret"></b></a><!-- aggiungere  icon-white?? -->
                                <ul class="dropdown-menu">
                                    <!--<li><a href="#"><i class="icon-book"></i> {t}Pastes manager{/t}</a></li>
                                    <li class="divider"></li>-->
                                    <li><a href="index.php?q=pages/about"><i class="icon-info-sign"></i> {t}About{/t}</a></li>
                                </ul>
                            </li>
                        </ul>
{/if}
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        {if isset($error)}
        <!-- ERRORS
            ================================================== -->
        <div class="container">
            <div class="alert alert-error">
                <p class="text-error">{$error}</p>
            </div>
        </div>
        {/if}
