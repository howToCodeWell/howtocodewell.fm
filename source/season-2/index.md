---
use: [season-2]
---

## Season 2 

{% for episode in site.season-2 %}
    {% if episode.title != 'Index' %}
      <div class="wrapper">
          <div class="box text">{{episode.date | date('jS F Y') }}</div>
              <div class="box">
                 {% include 'twitter_profile_img.html' with { handle: episode.twitter_handle, alt_text: episode.guest, profile_img: episode.profile_img }%}
               </div>
               <div class="box text"><a href="{{episode.url}}">{{ episode.guest }} {{ episode.title}}</a></div>
      </div>
  {% endif %}
{% endfor %}
