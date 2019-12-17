# BNCK BE Laravel

## Steps 
On cloning the git Repo please follow the below steps:

- composer install
- vendor/bin/homestead make
- mv .env.example .env
- vagrant up
- vagrant ssh
- cd code
- art key:generate
- art migrate
- Set the site to bnckfest.test


## API Routes

All future requests should use the root uri `http://bnckfest.test/api/` 

---

## BNCK

### Stages

#### `GET /stages`

Will return a list of all stages. In JSON format found in database/data.



#### `POST /stages`

TBC

##### Request

TBC

#### `GET /stages/<id>`

Will return a stage with the given `id`

#### `PUT /stages/<id>`

TBC

##### Request

TBC

#### `PATCH /stages/<id>`

TBC

##### Request

TBC

#### `DELETE /stages/<id>`

TBC

### Artists

#### `GET /artists`

Will return a list of all artists. In JSON format found in database/data.



#### `POST /artists`

TBC

##### Request

TBC

#### `GET /artists/<id>`

Will return an artist with the given `id`

#### `PUT /artists/<id>`

TBC

##### Request

TBC

#### `PATCH /artists/<id>`

TBC

##### Request

TBC

#### `DELETE /artists/<id>`

TBC

