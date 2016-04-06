# OppLoans Wordpress
Wordpress theme and templates for Opploans.com

## Install Theme in Wordpress

Once you've got Wordpress installed locally, you'll need to copy the "opploans2" directory from this Git repo:
https://github.com/opploans/wordpress

into:

wordpress/wp-content/themes/

Once that's done, you can go into the Wordpress admin control panel. Select Appearance -> Themes, and "Activate" the opploans2 theme.

## Notes

Keep in mind that this theme serves up the Homepage in a custom manner. It also serves up a template used by our other generic content pages. I'll throw some code up that adds custom support for an About Us page (although it may be possible to shoehorn the About Us page into the generic template).

This code:
https://github.com/opploans/wordpress/blob/master/opploans2/index.php#L66-L76
is the most important to understand how the Homepage and the other generic content pages are served and what's being included with each.
