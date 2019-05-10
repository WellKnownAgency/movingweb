<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
  <loc>https://moving-crm.com</loc>
  <lastmod>2019-05-10T00:00:00+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://moving-crm.com/pricing</loc>
  <lastmod>2019-05-10T00:00:00+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://moving-crm.com/support</loc>
  <lastmod>2019-05-10T00:00:00+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://moving-crm.com/faq</loc>
  <lastmod>2019-05-10T00:00:00+00:00</lastmod>
  <priority>1.00</priority>
</url>
<url>
  <loc>https://moving-crm.com/blog</loc>
  <lastmod>2019-05-10T00:00:00+00:00</lastmod>
  <priority>1.00</priority>
</url>
 @foreach($posts as $post)
        <url>
            <loc>https://moving-crm.com/blog/{{ $post->slug }}</loc>
            <lastmod>{{ date('Y-m-d', strtotime($post->updated_at)) }}</lastmod>
            <priority>0.70</priority>
        </url>
@endforeach
</urlset>
