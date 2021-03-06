Mars Rover Challenge
==========================

[![Build Status](https://travis-ci.org/pvm/mars-rover-challenge.svg?branch=master)](https://travis-ci.org/pvm/mars-rover-challenge)
[![Maintainability](https://api.codeclimate.com/v1/badges/83f448dfec3330893406/maintainability)](https://codeclimate.com/github/pvm/mars-rover-challenge/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/83f448dfec3330893406/test_coverage)](https://codeclimate.com/github/pvm/mars-rover-challenge/test_coverage)

This is a Mars Rover Challenge made with Symfony Console Component 4.0!

# Specification
A squad of robotic rovers is to be landed by NASA on a plateau on Mars.
This plateau, which is curiously rectangular, must be navigated by the rovers so that their on
board cameras can get a complete view of the surrounding terrain to send back to Earth.
A rover's position is represented by a combination of an x and y co-ordinates and a letter
representing one of the four cardinal compass points. The plateau is divided up into a grid to
simplify navigation. An example position might be 0, 0, N, which means the rover is in the
bottom left corner and facing North.
In order to control a rover, NASA sends a simple string of letters. The possible letters are 'L', 'R'
and 'M'. 'L' and 'R' makes the rover spin 90 degrees left or right respectively, without moving
from its current spot.
'M' means move forward one grid point, and maintain the same heading.
Assume that the square directly North from (x, y) is (x, y+1).
## Input:
The first line of input is the upper-right coordinates of the plateau, the lower-left coordinates are
assumed to be 0,0.
The rest of the input is information pertaining to the rovers that have been deployed. Each rover
has two lines of input. The first line gives the rover's position, and the second line is a series of
instructions telling the rover how to explore the plateau.
The position is made up of two integers and a letter separated by spaces, corresponding to the
x and y co-ordinates and the rover's orientation.
Each rover will be finished sequentially, which means that the second rover won't start to move
until the first one has finished moving.
## Output:
The output for each rover should be its final co-ordinates and heading.

## Example
#### Test input:
```
5 5
1 2 N
LMLMLMLMM
3 3 E
MMRMMRMRRM
```

#### Test output:
```
1 3 N
5 1 E
```

# Installation 

### Requirements

- PHP 7.2
- Docker (for docker usage)

Clone this repository using HTTPS or SSH

```bash
$ git clone git@github.com:pvm/mars-rover-challenge.git
```

or

```bash
$ git clone https://github.com/pvm/mars-rover-challenge.git
```

Install all the project dependencies using composer

```bash
$ composer install
```

# Run

### Using The Command Line

Just access the path of the project and run: 

```bash
$ ./bin/console rover-manager
```

### Using Docker

```bash
$ docker-compose --project-name philippevm build
$ docker run -it philippevm_rover bin/console rover-manager
```

# Test

To run the tests just access the path of project and run:

```bash
$ ./vendor/bin/simple-phpunit
```

or

```bash
$ composer test
```

If you are using docker for application and not running PHP on your local machine please run the following commmand:

```bash
$ docker-compose --project-name philippevm build
$ docker run -it philippevm_rover vendor/bin/simple-phpunit
```