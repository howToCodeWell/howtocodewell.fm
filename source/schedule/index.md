---
title: Schedule
layout: default
---

# Podcast schedule
{% for event in site.schedule %}
  <div class="episode-list">
      <div class="episode-profile-image">
        {% include 'twitter_profile_img.html' with { handle: event.twitter_handle, alt_text: event.guest, profile_img: event.profile_img }%}
       </div>
       <div class="episode-title">{{ event.guest }} {% if event.topic == '' %} TBD {% else %} {{event.topic }} {% endif %}
       </div>
  </div>
  <div class="episode-details">
    <div class="episode-date">Due Date: {% if event.date == '' %} TBD {% else %} {{event.date | date('jS F Y') }} {% endif %}</div>
    <div class="episode-patreon-link">{% if event.patreon_link is not empty %}<a href="{{event.patreon_link}}">Get it now</a>{% endif %}</div>
  </div>
{% endfor %}
