<div class="element">
    <% if $LightboxView %>
        <a href="$Photo.Link" data-lightbox="$Photo.Title" data-title="$Photo.Title">
            <img src="$Photo.Link" alt="$Photo.Title" class="photo-element">
        </a>
    <% else %>
        <img src="$Photo.Link" alt="$Photo.Title" class="photo-element">
    <% end_if %>
</div>
