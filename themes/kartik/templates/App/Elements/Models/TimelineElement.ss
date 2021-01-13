<div class="timeline-element <% if not $Timelines %>p-0<% end_if %>">
    <div class="container">
        <% if $ShowTitle && $Title %>
            <div class="col-title">
                <h2>$Title</h2>
            </div>
        <% end_if %>
        <% if $Timelines %>
            <div class="py-4">
                <div class="flex-parent">
                    <div class="input-flex-container">
                        <% loop $Timelines.Sort('Sort') %>
                            <div class="input <% if $Active %>active<% end_if %>">
                                <span data-year="$Date.Format('Y')" data-info="$Message"></span>
                            </div>
                        <% end_loop %>
                    </div>
                </div>
            </div>
        <% end_if %>
    </div>
</div>
