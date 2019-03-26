---
title: Schedule
layout: default
---
{% for event in site.schedule %}
  <div class="wrapper">
  <div class="box text">Date: {% if event.date == '' %} TBD {% else %} {{event.date | date('jS F Y') }} {% endif %}</div>
      <div class="box">
        {% include 'twitter_profile_img.html' with { handle: event.twitter_handle, alt_text: event.guest, profile_img: event.profile_img }%}
       </div>
       <div class="box text">{{ event.guest }}</div>
    <div class="box text">Topic: {% if event.topic == '' %} TBD {% else %} {{event.topic }} {% endif %}</div>
    
  </div>
{% endfor %}
