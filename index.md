---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home
---
# Season 2 
<ul>
{% for episode in site.season-2 reversed %}

  <li>
    <a href="{{ episode.url }}">{{episode.date | date_to_string}} - {{ episode.guest }} - {{ episode.title }}</a>
   </li>
    
{% endfor %}
</ul>