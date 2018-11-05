# Trip Sorter

It is tested under Windows 10 with Docker as container system.


Project is written with the assumption, to use it as library. In tests/Services/SortServiceTest is an example how to use it.

1. To add new kind of transportation you need:
 - Create proper DTO object based on currently existing DTOs
 - If is needed, add proper interface to it
 - If is needed, add proper factory to initiate it.
 - Add Trip{typeOfTranssport}Strategy, which will transform BoardCard into a sentence describing a leg of trip.

 2. Additional annotation:
 - DTO was originally initiated, as Data Transfer Object in which json should be converted, but I left that concept, and I started to work with project as the library.
 - So, There are no any "Frontend" elements like handling API requests etc. or any transformation form json to the BoardCards, because data can be received in many ways, so for example can be written some Adapters later, which will handle with json - as separated functionality.
- I know, that, in not all places are proper phpDoc comment added. So please be forgiving.
- Are added just 2 tests. Because especially the second one generally use the whole logic to return expected list. I know, that I should write the tests also for other parts, like Strategies, all factories etc.
