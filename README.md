# Living Classroom Snippets Repository

Code snippets that sync to the Living Classroom WordPress site (livingclassroom.ca) via SnipForge.

## Repository Structure

```
livingclassroom-snippets/
├── php/                           # PHP snippets (execute on hooks)
├── js/                            # JavaScript snippets (enqueued)
├── css/                           # CSS snippets (enqueued)
├── api/                           # Custom REST endpoints
└── README.md
```

## Sync

Snippets sync to the site via SnipForge GitHub webhook integration.

### Site Details

- **Domain:** livingclassroom.ca
- **Hosting:** SiteGround (SSH alias: `lc-siteground`)
- **WordPress:** 6.9.4
- **SnipForge:** v1.5.2

## Snippet Conventions

- One snippet per file
- Descriptive filenames: `feature-description.php`
- PHP file header with snippet metadata (title, description, scope, priority)
- Test on staging before pushing to main branch
