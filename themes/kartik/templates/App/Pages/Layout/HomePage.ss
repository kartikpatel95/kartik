<div class="home-page">
    <% if $Banner %>
        <div class="banner" style="background-image: url($Banner.Link);">
            <div class="banner-message container">
                $BannerMessage
            </div>
        </div>
    <% end_if %>
</div>
