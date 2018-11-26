https://www.addtoany.com/buttons/customize/floating_share_buttons



AddToAny floating share buttons are available in vertical and horizontal fixed positions, and are customizable for mobile and desktop devices.

Vertical Share Bar

You can position floating vertical share buttons that are fixed alongside your site's content (in a sidebar, for instance), or docked to the far left or far right side of the user's screen.

The following example displays a vertical share bar that is docked to the left side of the user's screen, 150 pixels from the top.

<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
The following example displays a vertical share bar that is fixed relative to a parent element (usually the site's main content), 150 pixels from the top of the page, and offset from the left of the parent element by 100 pixels. The parent element needs to have a specified width, and the vertical share bar code should placed as a descendant of that element as in following example. The current page displays this style on devices with a wide enough screen.

<div class="example_parent_element" style="margin:0 auto; width:900px;">
    
    <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="margin-left:-100px; top:150px;">
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_google_plus"></a>
        <a class="a2a_button_pinterest"></a>
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    </div>
    
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    
</div>
Horizontal Share Bar

You can position horizontal share buttons in a "floating bar" that is commonly docked to the bottom of the user's screen, particularly on mobile devices.

The following example displays a horizontal share bar that is docked to the bottom of the user's screen on the right side. The current page uses this style.

<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
The following example displays a center-aligned horizontal share bar that is docked to the bottom of the user's screen. Center alignment is done by specifying a left position value of 50% and a negative margin-left value that is equal to the total width of the icons. The width of these default icons can be calculated by multiplying the number of icons by 40. For example, 5 icons (multiplied by 40) gives a margin-left value of -100px.

<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; left:50%; margin-left:-100px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>

<script async src="https://static.addtoany.com/menu/page.js"></script>
Responsive Floating Share Buttons

Using CSS media queries, you can specify mobile/desktop breakpoints for responsive floating share buttons. For example, it is common to hide a "docked" vertical share bar on the smaller screens of mobile and tablet devices.

<style type="text/css">
/* Hide AddToAny vertical share bar when screen is less than 980 pixels wide */
@media screen and (max-width: 980px) {
    .a2a_floating_style.a2a_vertical_style { display: none; }
}
</style>
