---
layout: default
title: Home
pagination:
    max_per_page: 3
use: [season-2]
---
<ul>
    {% for item in page.pagination.items %}
        <li><a href="{{ item.url }}">{{ item.title }}</a></li>
    {% endfor %}
</ul>

<nav>
{% if page.pagination.previous_page or page.pagination.next_page %}
    {% if page.pagination.previous_page %}
        <a href="{{ site.url }}{{ page.pagination.previous_page.url }}">Newer Items</a>
    {% endif %}
    {% if page.pagination.next_page %}
        <a href="{{ site.url }}{{ page.pagination.next_page.url }}">Older Items</a>
    {% endif %}
{% endif %}
</nav>