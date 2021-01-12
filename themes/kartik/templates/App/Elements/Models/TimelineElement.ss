<div class="timeline-element <% if not $Timelines %>p-0<% end_if %>">
    <div class="container">
        <% if $ShowTitle && $Title %>
            <h1>$Title</h1>
        <% end_if %>
        <% if $Timelines %>
            <div class="flex-parent">
                <div class="input-flex-container">
                    <% loop $Timelines %>
                        <div class="input <% if $Active %>active<% end_if %>">
                            <span data-year="$Date" data-info="$Message"></span>
                        </div>
                    <% end_loop %>
                </div>
            </div>
        <% end_if %>
    </div>
</div>
