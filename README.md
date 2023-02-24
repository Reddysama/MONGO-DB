# MONGO-DB
Mongo DB Data
Now, let's create 5 queries that would be appropriate for this collection:
Query for the player with
Query for the player with
the most points:
scss
db.basketball.find().sort({ points: -1 }).limit(1)
This query finds all the players in the collection, sorts them in descending order based on their points, and returns the first player with the most points.
Query for the player with the most rebounds:
scss
db.basketball.find().sort({ rebounds: -1 }).limit(1)
This query finds all the players in the collection, sorts them in descending order based on their rebounds, and returns the first player with the most rebounds.
Query for the player with the most assists:
scss
db.basketball.find().sort({ assists: -1 }).limit(1)
This query finds all the players in the collection, sorts them in descending order based on their assists, and returns the first player with the most assists.
Query for the player with the most blocks:
scss
db.basketball.find().sort({ blocks: -1 }).limit(1)
This query finds all the players in the collection, sorts them in descending order based on their blocks, and returns the first player with the most blocks.
Query for a list of players sorted from most to fewest points:
lua
db.basketball.find().sort({ points: -1 })
This query finds all the players in the collection and sorts them in descending order based on their points. It returns a list of players sorted from the player with the most points to the player with the fewest points.
