
  <nav class="top-bar show-for-large-up" data-topbar role="navigation">
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="left">
        <li class="active show-for-medium-up"><a href="otis" target="_blank">Launch OTIS</a></li>
        <% loop Categories %>
          <% loop $Services %>
            <% if $Title != "OTIS" %>
              <li><a href="$Link" target="_blank">$Title</a></li>
            <% end_if %>
          <% end_loop %>

        <% end_loop %>
      </ul>
    </section>
  </nav>