<div class="banner_element $ImageLength" style="background-image: url($Banner.URL); height:{$Height}px">
    <% if $Title && $ShowTitle %>
        <div class="container message">
            <div class="title">
                $Title
            </div>
            <div class="summary">
                $Content
            </div>
        </div>
    <% end_if %>
</div>
