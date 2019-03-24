---
# Feel free to add content and custom Front Matter to this file.
# To modify the layout, see https://jekyllrb.com/docs/themes/#overriding-theme-defaults

layout: home
---

## Season 2 

{% for episode in site.season-2 reversed %}
  <div class="wrapper">
      <div class="box text">{{episode.date | date_to_string}}</div>
          <div class="box">
             {% include twitterImage.html alt_text=episode.guest handle=episode.guests_twitter profile_img=episode.profile_img %}
           </div>
           <div class="box text"><a href="{{episode.url}}">{{ episode.guest }} {{ episode.title}}</a></div>
    
  </div>
  {% endfor %}
 