MODREAL
=======

Work in process...

This is a single page application. 

The technical plan is showed below


GENERAL OBJECTS
=================

Used for Backend and Frontend Models

General layout


User		Post		Comment		Image		Tag
=================================================================
ID_user		ID_post		ID_comment	ID_image	ID_tag
userName	FK_user		FK_post		FK_post		FK_tagList
pwd				FK_user				FK_post	
email
accessLvl


Likes ? post or comments ? 
Brand surveys ? 

How are we gonna handle the tags list ?
Can your ruby plugin take care of creating dynamic tags that are not doubled and with an Identifier ? 


FRONTEND
============

Build upon backbone MV* structure
Possibility of adding Backbone plugins

VIEWS
============

1) PageView
  a) HeaderView
      i) MenuView
      ii) LoginView
  b) BrandView
      i)  GraphView
      ii) Surveys/Contest Views
  c) HomeView
     i) PostViews
	- SearchView
     ii) InfiniteScrollView
  d) DashBoardView
     i) CRUD view
  e) FooterView

Models
============

Each table represent a model with their attributes
They are nested that is

1) User Model
	a) Collection of Post models
		i) Collection of tag models
		ii) Collection of Comment models
		iii)  Collection of Image models
	

Collections
============

Those are models groupment
1) User collection
2) Post collection
3) Tag Collection
4) Image Collection

Routing
============

For the main sub-apps

1) #home
2) #dashboard
3) #brand

For the RestFul API Design

POST-PUT-DELETE-GET

1) user/:id
2) post/:id
3) comment/:id
4) image/:id
5) tag/:id


Events
============

Each view also will have events attached
Those views will also listen to the model changes


Design
============

Each view requires a design


Backend
============

...









