<div class="one-column-block" style="background-color: $BgColor.CSSColor(0.5);">
    <div class='container'>
        <% if $ShowTitle && $Title %>
            <div class="col-title">
                <h2>$Title</h2>
            </div>
        <% end_if %>

        <div class="row">
            <% if $Column %>
                <div class="col-md-12 pb-3 mx-auto">
                    <% loop $Column %>
                        $Me
                    <% end_loop %>
                </div>
            <% end_if %>
        </div>
    </div>
</div>
