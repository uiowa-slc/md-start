<div class="contain-to-grid">
  <nav class="top-bar" data-topbar role="navigation">
    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="left">
        <li class="active show-for-medium-up"><a href="#" target="_blank">Launch OTIS</a></li>
        <% loop Categories %>
          <% loop $Services %>
            <li><a href="$Link" target="_blank">$Title</a></li>
          <% end_loop %>

        <% end_loop %>
      </ul>
    </section>
  </nav>
</div>