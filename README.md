# BNCK BE Laravel

## Steps 
On cloning the git Repo please follow the below steps:

- composer install
- vendor/bin/homestead make
- copy the  .env.example into the .env
- vagrant up
- vagrant ssh
- cd code
- art key:generate
- art migrate
- Set the site to bnckfest.test

## API Routes

All future requests should use the root uri `http://bnckfest.test/api/` 

---

## Migrate Tables and Seed Tables
The data that will be seeding is found in database/data
 - performances.json
 - artists.json
 - stages.json

run the following 
vagrant ssh 
cd code
artisan migrate:refresh -seed

---

## BNCK

### Stages

#### `GET /stages`

Will return a list of all stages.


#### `POST /stages`

Will add a stage

##### Request

- name: varchar 250

#### `GET /stages/<id>`

Will return a stage with the given `id`

#### `PUT /stages/<id>`

will update the stage name

##### Request

 - name: varchar 250


#### `DELETE /stages/<id>`

Deletes a stage 

---

### Artists

#### `GET /artists`

Will return a list of all artists. In JSON format found in database/data.


#### `POST /artists`

This will add and artist and auto generate and Id. 

##### Request

TBC

#### `GET /artists/<id>`
Will return an artist with the given `id`

#### `PUT /artists/<id>`

This will update the aritst with given id

##### Request

TBC

#### `PATCH /artists/<id>`

TBC

##### Request

TBC

#### `DELETE /artists/<id>`

This will delete an artist by given id.

---

### Performances

#### `POST /performaces`

TBC

##### Request

TBC

#### `GET /performaces/<id>
Will return an performance with the given `id`

#### `PUT /performaces/<id>`

This will update the performance with given id

##### Request

TBC

#### `PATCH /perfomances/<id>`

TBC

##### Request

TBC

#### `DELETE /perfomances/<id>`

This will delete an performance by given id.

