---
layout: home
---
# Schedule

{% for event in site.data.schedule.list %}
  <div class="wrapper">
  <div class="box text">Date: {% if event.date == '' %} TBD {% else %} {{event.date | date_to_string }} {% endif %}</div>
      <div class="box">
        {% include twitterImage.html alt_text=event.guest handle=event.twitter_handle profile_img=event.profile_img %}
       </div>
       <div class="box text">{{ event.guest }}</div>
    <div class="box text">Topic: {% if event.topic == '' %} TBD {% else %} {{event.topic }} {% endif %}</div>
    
  </div>
{% endfor %}
