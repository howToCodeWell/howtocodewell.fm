---
layout: default
title: Season 2 - 2019
generator: pagination
pagination:
    provider: data.season_2
    max_per_page: 10
use:
  - season_2
---

{% for episode in page.pagination.items %}
{% if episode.title is not empty %}
<div class="wrapper">
  <div class="box text">{{episode.date | date('jS F Y') }}</div>
      <div class="box">
         {% include 'twitter_profile_img.html' with { handle: episode.twitter_handle, alt_text: episode.guest, profile_img: episode.profile_img }%}
       </div>
   <div class="box text"><a href="{{episode.url}}">{{ episode.guest }} {{ episode.title}}</a></div>
</div>
{% endif %}
{% endfor %}