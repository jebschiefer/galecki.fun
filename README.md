# galecki.fun

## Setup
1. Install docker with docker compose.
2. Create `database-init/` in the root of the project.
3. Add a database archive to `database-init/` to initialize the database.
4. Add user uploaded files to `wp-content/uploads/`.
5. Start containers.
    - `$ docker compose up`

## Custom Theme
A custom theme is in `wp-content/themes/galecki-fun/`. It is a child theme of the default WordPress Twenty Twenty-One Theme.

## Custom Plugins
Custom plugins can be placed in `wp-content/plugins/<plugin-name>/`. Custom plugins will need to be bind mounted to the `wordpress` container in `docker-compose.yml`.

## Community Plugins
Install and activate after initial site setup.
- A-Z Listing - https://wordpress.org/plugins/a-z-listing/
