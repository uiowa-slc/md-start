
<div class="row">
  <div class="large-12 columns">

    <section>
    <% if $Categories %>
    <% loop $Categories %> 
      <h1>$Title</h1>
        <ul class="large-block-grid-3 medium-block-grid-2">
        <% loop $Services %>
          <% include ServiceCard %>
        <% end_loop %>
        </ul>
      <% end_loop %> 
      </section>
    <% end_if %>
      
  </div>
</div>
 