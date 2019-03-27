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
       <div class="episode-title">{{ event.guest }} Topic: {% if event.topic == '' %} TBD {% else %} {{event.topic }} {% endif %}</div>
    <div class="episode-date">Date: {% if event.date == '' %} TBD {% else %} {{event.date | date('jS F Y') }} {% endif %}</div>
  </div>
{% endfor %}
