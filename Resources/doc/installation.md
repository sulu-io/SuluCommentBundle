# Installation

Install bundle over composer:

```bash
composer require sulu/comment-bundle
```

Configure the routing:

```yml
sulu_comment_api:
    type: rest
    resource: "@SuluCommentBundle/Resources/config/routing_api.xml"
    prefix: /admin/api

sulu_comment:
    resource: "@SuluCommentBundle/Resources/config/routing.xml"
    prefix: /admin/comments
```

Add bundle to AbstractKernel:

```php
new Sulu\Bundle\CommentBundle\SuluCommentBundle(),
```

Possible bundle configuration:

```yml
sulu_comment:
    default_templates:
        comments:             'SuluCommentBundle:WebsiteComment:comments.html.twig'
        comment:              'SuluCommentBundle:WebsiteComment:comment.html.twig'
    types:
        templates:
            comments:             'SuluCommentBundle:WebsiteComment:comments.html.twig'
            comment:              'SuluCommentBundle:WebsiteComment:comment.html.twig'
    objects:
        comment:
            model:                Sulu\Bundle\CommentBundle\Entity\Comment
            repository:           Sulu\Bundle\CommentBundle\Entity\CommentRepository
        thread:
            model:                Sulu\Bundle\CommentBundle\Entity\Thread
            repository:           Sulu\Bundle\CommentBundle\Entity\ThreadRepository
```
