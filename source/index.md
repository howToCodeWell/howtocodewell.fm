---
layout: home
generator: pagination
pagination:    
    provider: data.episodes
    max_per_page: 5
use:
  - episodes 
meta:
    description: "How To Code Well FM - A weekly podcast with guests from within the web development industry"
    title: "How to Code Well Podcast - Weekly web development discussions" 
---

{% include "podcastPlayer.html.twig" with { id: site.featured.podcast_id } %}
# Latest episodes
{% for episode in page.pagination.items %}
{% if episode.title != 'Season 2 - 2019' %}
<div class="episode-list">
      <div class="episode-profile-image">
         {% include 'twitter_profile_img.html' with { handle: episode.twitter_handle, alt_text: episode.guest, profile_img: episode.profile_img }%}
       </div>
   <div class="episode-title"><a href="{{episode.url}}">{{ episode.guest }} {{ episode.title}}</a></div>
   <div class="episode-date">{{episode.date | date('jS F Y') }}</div>
</div>
{% endif %}
{% endfor %}

<a href="/season">View all episodes</a>

