<div class="element py-4" <% if not $isWhite($BgColor) %>style="background-color: $BgColor.CSSColor(0.5);"<% end_if %>>
$BgColor
    <% if $Tiles %>
       <div class="container">
       <div class="d-flex justify-content-center flex-wrap">
          <% loop $Tiles.Sort('Sort') %>
            <% if $LinkTo %><a href="$LinkTo.LinkURL" class="tile-link"><% end_if %>
                <div class="project-summary-image" style="background-image: url($Photo.Link);">
                    <div class="title">
                        $Title
                    </div>
                </div>
            <% if $LinkTo %></a><% end_if %>
          <% end_loop %>
          </div>
      </div>
    <% end_if %>
</div>
