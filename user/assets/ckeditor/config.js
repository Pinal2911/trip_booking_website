/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	// config.extraPlugins = 'rulesimport';
	config.allowedContent = true;
	// config.extraAllowedContent = '*(*);*{*}';
	CKEDITOR.dtd.$removeEmpty['i'] = false;
	// config.protectedSource.push( /<i class[\s\S]*?\>/g );
    // config.protectedSource.push( /<\/i>/g );
 //  config.rulesimport_filepath = '../../jpw/css/style.css';

 // config.allowedContent = true;
// CKEDITOR.dtd.$removeEmpty.i = 0;

// config.fontawesome : {

// 'path': 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css',
// 'version': '5.13.0',
// 'edition': 'pro', (default: pro, options: free,pro)
// 'element': 'span' (default span, options, all html elements such as i,div,span,a,p, etc..)

// }
// CKEDITOR.dtd.$removeEmpty['span'] = false;
// config.contentsCss = ['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'];
// config.extraPlugins = 'ckeditorfa5';


    // config.extraPlugins = 'ckeditorfa-fa5';
    // config.allowedContent = true;
    // config.contentsCss = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css';


 //    config.allowedContent = true;
	// CKEDITOR.dtd.$removeEmpty['i'] = false
	// CKEDITOR.dtd.$removeEmpty.i = 0;
	// CKEDITOR.dtd.$removeEmpty['span'] = false;
	// config.contentsCss = ['//cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css','//cdn.jsdelivr.net/bootswatch/3.3.6/readable/bootstrap.css'];

config.extraPlugins = 'ckawesome';
// config.toolbar = [{ name: 'CKAwesome', items: ['Image', 'ckawesome']}];
config.fontawesomePath = '//cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css';



    // config.toolbar = [['Source', '-', 'NewPage', '-', 'Templates','fontawesome5']];
    // config.extraPlugins = 'fontawesome5';
    // config.fontawesome = {'path':'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css':'version':'5.13.0','edition':'pro','element':'i'};
    // CKEDITOR.replace(editorname, config);
    // CKEDITOR.dtd.$removeEmpty['span'] = false;
    // CKEDITOR.dtd.$removeEmpty['i'] = false;

	};
