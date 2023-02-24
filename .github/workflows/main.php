db.basketball.insertMany([
  {
    name: "LeBron James",
    points: 25.0,
    rebounds: 7.8,
    assists: 7.7,
    blocks: 1.1
  },
  {
    name: "Anthony Davis",
    points: 22.5,
    rebounds: 8.4,
    assists: 3.0,
    blocks: 2.3
  },
  {
    name: "Russell Westbrook",
    points: 21.8,
    rebounds: 10.6,
    assists: 10.2,
    blocks: 0.5
  },
  {
    name: "James Harden",
    points: 25.2,
    rebounds: 8.0,
    assists: 10.9,
    blocks: 0.7
  },
  {
    name: "Joel Embiid",
    points: 29.9,
    rebounds: 10.8,
    assists: 3.1,
    blocks: 1.4
  },
  {
    name: "Karl-Anthony Towns",
    points: 23.8,
    rebounds: 10.6,
    assists: 4.3,
    blocks: 1.2
  },
  {
    name: "Luka Doncic",
    points: 25.4,
    rebounds: 7.7,
    assists: 8.3,
    blocks: 0.5
  },
  {
    name: "Kevin Durant",
    points: 28.1,
    rebounds: 7.0,
    assists: 5.2,
    blocks: 1.3
  },
  {
    name: "Stephen Curry",
    points: 30.1,
    rebounds: 5.5,
    assists: 5.8,
    blocks: 0.1
  },
  {
    name: "Damian Lillard",
    points: 28.8,
    rebounds: 4.2,
    assists: 7.5,
    blocks: 0.3
  },
  {
    name: "Kyrie Irving",
    points: 27.4,
    rebounds: 4.8,
    assists: 6.2,
    blocks: 0.6
  },
  {
    name: "Giannis Antetokounmpo",
    points: 28.0,
    rebounds: 11.4,
    assists: 6.0,
    blocks: 1.2
  },
  {
    name: "Chris Paul",
    points: 16.4,
    rebounds: 4.5,
    assists: 8.9,
    blocks: 0.2
  },
  {
    name: "Nikola Jokic",
    points: 26.4,
    rebounds: 10.8,
    assists: 8.3,
    blocks: 0.7
  },
  {
    name: "Bradley Beal",
    points: 31.3,
    rebounds: 4.7,
    assists: 4.4,
    blocks: 0.4
  }
])

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




