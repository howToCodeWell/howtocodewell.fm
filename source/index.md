---
layout: default
generator: pagination
pagination:
    provider: data.episodes
    max_per_page: 10
use:
  - episodes
meta:
    description: How To Code Well FM - A weekly podcast with guests from within the web development industry
    title: How to Code Well Podcast - Weekly web development discussions 
---
{% for episode in page.pagination.items %}
{% if episode.title != 'Season 2 - 2019' %}
<div class="wrapper">
  <div class="box text">{{episode.date | date('jS F Y') }}</div>
      <div class="box">
         {% include 'twitter_profile_img.html' with { handle: episode.twitter_handle, alt_text: episode.guest, profile_img: episode.profile_img }%}
       </div>
   <div class="box text"><a href="{{episode.url}}">{{ episode.guest }} {{ episode.title}}</a></div>
</div>
{% endif %}
{% endfor %}

<a href="/season">View all episodes</a>

