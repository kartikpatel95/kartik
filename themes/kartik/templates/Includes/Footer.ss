<div class="footer">
    <div class="py-4 px-5">
        <div class="row">
            <div class="col">
                <% with $SiteConfig %>
                    <div class="site-logo">
                        <% if $Logo %>$Logo<% else %><img src="$ThemeDir/dist/img/logo.svg" alt="Site logo" class="site-logo"><% end_if %>
                    </div>
                <% end_with %>
                <div class="rights-reserved">
                    &copy 2020 | All Rights Reserved | Kartik Patel
                </div>
            </div>
            <div class="col-auto">
                <div class="d-flex h-100 justify-content-end align-items-sm-end flex-column">
                    <% with $SiteConfig %>
                        <% if $SocialIcons %>
                            <div class="social-icons">
                                <% loop $SocialIcons %>
                                    <a href="$LinkURL" {$TargetAttr}><i class="$Icon pr-3"></i></a>
                                <% end_loop %>
                            </div>
                        <% end_if %>
                    <% end_with %>
                    <div class="email">
                        <a href="mailto:kartikpatel@outlook.co.nz?subject=website enquiry">
                            kartikpatel@outlook.co.nz
                        </a>
                    </div>

                    <div class="rights-reserved"> 
                        &copy 2020 | All Rights Reserved | Kartik Patel
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
