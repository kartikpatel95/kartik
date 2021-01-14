<div class="banner_element $ImageLength" <% if $Banner %>style="background-image: url($Banner.URL); height:{$Height}px"<% end_if %>>
    <% if $ShowBreadCrumbs %>
        <% with $Page %>
            <div class="container pt-3">
                $Breadcrumbs
            </div>
        <% end_with %>
    <% end_if %>
    <% if $Title && $ShowTitle %>
        <div class="container message">
            <div class="title">$Title</div>
            <div class="summary">$Content</div>
        </div>
    <% end_if %>
</div>
