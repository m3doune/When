<?php

use \When\When;

class WhenYearlyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * DTSTART;TZID=US-Eastern:19970610T090000
     * RRULE:FREQ=YEARLY;COUNT=10;BYMONTH=6,7
     */
    public function testYearlyOne()
    {
        $results[] = new DateTime('1997-06-10 09:00:00');
        $results[] = new DateTime('1997-07-10 09:00:00');
        $results[] = new DateTime('1998-06-10 09:00:00');
        $results[] = new DateTime('1998-07-10 09:00:00');
        $results[] = new DateTime('1999-06-10 09:00:00');
        $results[] = new DateTime('1999-07-10 09:00:00');
        $results[] = new DateTime('2000-06-10 09:00:00');
        $results[] = new DateTime('2000-07-10 09:00:00');
        $results[] = new DateTime('2001-06-10 09:00:00');
        $results[] = new DateTime('2001-07-10 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19970610T090000"))
            ->freq("yearly")
            ->count(10)
            ->bymonth("6, 7")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * DTSTART;TZID=US-Eastern:19970101T090000
     * RRULE:FREQ=YEARLY;INTERVAL=3;COUNT=10;BYYEARDAY=1,100,200
     */
    public function testYearlyTwo()
    {
        $results[] = new DateTime('1997-01-01 09:00:00');
        $results[] = new DateTime('1997-04-10 09:00:00');
        $results[] = new DateTime('1997-07-19 09:00:00');
        $results[] = new DateTime('2000-01-01 09:00:00');
        $results[] = new DateTime('2000-04-09 09:00:00');
        $results[] = new DateTime('2000-07-18 09:00:00');
        $results[] = new DateTime('2003-01-01 09:00:00');
        $results[] = new DateTime('2003-04-10 09:00:00');
        $results[] = new DateTime('2003-07-19 09:00:00');
        $results[] = new DateTime('2006-01-01 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19970101T090000"))
            ->freq("yearly")
            ->interval(3)
            ->count(10)
            ->byyearday("1,100,200")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * DTSTART;TZID=US-Eastern:19970310T090000
     * RRULE:FREQ=YEARLY;INTERVAL=2;COUNT=10;BYMONTH=1,2,3
     */
    public function testYearlyThree()
    {
        $results[] = new DateTime('1997-03-10 09:00:00');
        $results[] = new DateTime('1999-01-10 09:00:00');
        $results[] = new DateTime('1999-02-10 09:00:00');
        $results[] = new DateTime('1999-03-10 09:00:00');
        $results[] = new DateTime('2001-01-10 09:00:00');
        $results[] = new DateTime('2001-02-10 09:00:00');
        $results[] = new DateTime('2001-03-10 09:00:00');
        $results[] = new DateTime('2003-01-10 09:00:00');
        $results[] = new DateTime('2003-02-10 09:00:00');
        $results[] = new DateTime('2003-03-10 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19970310T090000"))
            ->freq("yearly")
            ->interval(2)
            ->count(10)
            ->bymonth("1,2,3")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * DTSTART;TZID=US-Eastern:19980101T090000
     * RRULE:FREQ=YEARLY;UNTIL=20000131T090000Z;BYMONTH=1;BYDAY=SU,MO,TU,WE,TH,FR,SA
     */
    public function testYearlyFour()
    {
        $results[] = new DateTime('1998-01-01 09:00:00');
        $results[] = new DateTime('1998-01-02 09:00:00');
        $results[] = new DateTime('1998-01-03 09:00:00');
        $results[] = new DateTime('1998-01-04 09:00:00');
        $results[] = new DateTime('1998-01-05 09:00:00');
        $results[] = new DateTime('1998-01-06 09:00:00');
        $results[] = new DateTime('1998-01-07 09:00:00');
        $results[] = new DateTime('1998-01-08 09:00:00');
        $results[] = new DateTime('1998-01-09 09:00:00');
        $results[] = new DateTime('1998-01-10 09:00:00');
        $results[] = new DateTime('1998-01-11 09:00:00');
        $results[] = new DateTime('1998-01-12 09:00:00');
        $results[] = new DateTime('1998-01-13 09:00:00');
        $results[] = new DateTime('1998-01-14 09:00:00');
        $results[] = new DateTime('1998-01-15 09:00:00');
        $results[] = new DateTime('1998-01-16 09:00:00');
        $results[] = new DateTime('1998-01-17 09:00:00');
        $results[] = new DateTime('1998-01-18 09:00:00');
        $results[] = new DateTime('1998-01-19 09:00:00');
        $results[] = new DateTime('1998-01-20 09:00:00');
        $results[] = new DateTime('1998-01-21 09:00:00');
        $results[] = new DateTime('1998-01-22 09:00:00');
        $results[] = new DateTime('1998-01-23 09:00:00');
        $results[] = new DateTime('1998-01-24 09:00:00');
        $results[] = new DateTime('1998-01-25 09:00:00');
        $results[] = new DateTime('1998-01-26 09:00:00');
        $results[] = new DateTime('1998-01-27 09:00:00');
        $results[] = new DateTime('1998-01-28 09:00:00');
        $results[] = new DateTime('1998-01-29 09:00:00');
        $results[] = new DateTime('1998-01-30 09:00:00');
        $results[] = new DateTime('1998-01-31 09:00:00');
        $results[] = new DateTime('1999-01-01 09:00:00');
        $results[] = new DateTime('1999-01-02 09:00:00');
        $results[] = new DateTime('1999-01-03 09:00:00');
        $results[] = new DateTime('1999-01-04 09:00:00');
        $results[] = new DateTime('1999-01-05 09:00:00');
        $results[] = new DateTime('1999-01-06 09:00:00');
        $results[] = new DateTime('1999-01-07 09:00:00');
        $results[] = new DateTime('1999-01-08 09:00:00');
        $results[] = new DateTime('1999-01-09 09:00:00');
        $results[] = new DateTime('1999-01-10 09:00:00');
        $results[] = new DateTime('1999-01-11 09:00:00');
        $results[] = new DateTime('1999-01-12 09:00:00');
        $results[] = new DateTime('1999-01-13 09:00:00');
        $results[] = new DateTime('1999-01-14 09:00:00');
        $results[] = new DateTime('1999-01-15 09:00:00');
        $results[] = new DateTime('1999-01-16 09:00:00');
        $results[] = new DateTime('1999-01-17 09:00:00');
        $results[] = new DateTime('1999-01-18 09:00:00');
        $results[] = new DateTime('1999-01-19 09:00:00');
        $results[] = new DateTime('1999-01-20 09:00:00');
        $results[] = new DateTime('1999-01-21 09:00:00');
        $results[] = new DateTime('1999-01-22 09:00:00');
        $results[] = new DateTime('1999-01-23 09:00:00');
        $results[] = new DateTime('1999-01-24 09:00:00');
        $results[] = new DateTime('1999-01-25 09:00:00');
        $results[] = new DateTime('1999-01-26 09:00:00');
        $results[] = new DateTime('1999-01-27 09:00:00');
        $results[] = new DateTime('1999-01-28 09:00:00');
        $results[] = new DateTime('1999-01-29 09:00:00');
        $results[] = new DateTime('1999-01-30 09:00:00');
        $results[] = new DateTime('1999-01-31 09:00:00');
        $results[] = new DateTime('2000-01-01 09:00:00');
        $results[] = new DateTime('2000-01-02 09:00:00');
        $results[] = new DateTime('2000-01-03 09:00:00');
        $results[] = new DateTime('2000-01-04 09:00:00');
        $results[] = new DateTime('2000-01-05 09:00:00');
        $results[] = new DateTime('2000-01-06 09:00:00');
        $results[] = new DateTime('2000-01-07 09:00:00');
        $results[] = new DateTime('2000-01-08 09:00:00');
        $results[] = new DateTime('2000-01-09 09:00:00');
        $results[] = new DateTime('2000-01-10 09:00:00');
        $results[] = new DateTime('2000-01-11 09:00:00');
        $results[] = new DateTime('2000-01-12 09:00:00');
        $results[] = new DateTime('2000-01-13 09:00:00');
        $results[] = new DateTime('2000-01-14 09:00:00');
        $results[] = new DateTime('2000-01-15 09:00:00');
        $results[] = new DateTime('2000-01-16 09:00:00');
        $results[] = new DateTime('2000-01-17 09:00:00');
        $results[] = new DateTime('2000-01-18 09:00:00');
        $results[] = new DateTime('2000-01-19 09:00:00');
        $results[] = new DateTime('2000-01-20 09:00:00');
        $results[] = new DateTime('2000-01-21 09:00:00');
        $results[] = new DateTime('2000-01-22 09:00:00');
        $results[] = new DateTime('2000-01-23 09:00:00');
        $results[] = new DateTime('2000-01-24 09:00:00');
        $results[] = new DateTime('2000-01-25 09:00:00');
        $results[] = new DateTime('2000-01-26 09:00:00');
        $results[] = new DateTime('2000-01-27 09:00:00');
        $results[] = new DateTime('2000-01-28 09:00:00');
        $results[] = new DateTime('2000-01-29 09:00:00');
        $results[] = new DateTime('2000-01-30 09:00:00');
        $results[] = new DateTime('2000-01-31 09:00:00');

        $r = new When();

        $r->startDate(new DateTime("19980101T090000"))
            ->freq("yearly")
            ->until(new DateTime("20000131T090000"))
            ->bymonth("1")
            ->byday("su,mo,tu,we,th,fr,sa")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * Monday of week number 20 (where the default start of the week is Monday), forever:
     * DTSTART;TZID=US-Eastern:19970512T090000
     * RRULE:FREQ=YEARLY;BYWEEKNO=20;BYDAY=MO
     * Results limited to first 10 since this has no enddate or count.
     */
     function testYearlyFive()
     {
        $results[] = new DateTime('1997-05-12 09:00:00');
        $results[] = new DateTime('1998-05-11 09:00:00');
        $results[] = new DateTime('1999-05-17 09:00:00');
        $results[] = new DateTime('2000-05-15 09:00:00');
        $results[] = new DateTime('2001-05-14 09:00:00');
        $results[] = new DateTime('2002-05-13 09:00:00');
        $results[] = new DateTime('2003-05-12 09:00:00');
        $results[] = new DateTime('2004-05-10 09:00:00');
        $results[] = new DateTime('2005-05-16 09:00:00');
        $results[] = new DateTime('2006-05-15 09:00:00');

        $r = new When();

        $r->startDate(new DateTime("19970512T090000"))
            ->freq("yearly")
            ->count(10)
            ->byweekno(20)
            ->byday('mo')
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
     }

     /**
      * Every Thursday in March, forever:
      * DTSTART;TZID=US-Eastern:19970313T090000
      * RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=TH
      */
     function testYearlySix()
     {
        $results[] = new DateTime('1997-03-13 09:00:00');
        $results[] = new DateTime('1997-03-20 09:00:00');
        $results[] = new DateTime('1997-03-27 09:00:00');
        $results[] = new DateTime('1998-03-05 09:00:00');
        $results[] = new DateTime('1998-03-12 09:00:00');
        $results[] = new DateTime('1998-03-19 09:00:00');
        $results[] = new DateTime('1998-03-26 09:00:00');
        $results[] = new DateTime('1999-03-04 09:00:00');
        $results[] = new DateTime('1999-03-11 09:00:00');
        $results[] = new DateTime('1999-03-18 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19970313T090000"))
            ->freq("yearly")
            ->count(10)
            ->bymonth(3)
            ->byday('th')
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
     }

    /**
     * Every Thursday, but only during June, July, and August, forever:
     * DTSTART;TZID=US-Eastern:19970605T090000
     * RRULE:FREQ=YEARLY;BYDAY=TH;BYMONTH=6,7,8
     */
    function testYearlySeven()
    {
        $results[] = new DateTime('1997-06-05 09:00:00');
        $results[] = new DateTime('1997-06-12 09:00:00');
        $results[] = new DateTime('1997-06-19 09:00:00');
        $results[] = new DateTime('1997-06-26 09:00:00');
        $results[] = new DateTime('1997-07-03 09:00:00');
        $results[] = new DateTime('1997-07-10 09:00:00');
        $results[] = new DateTime('1997-07-17 09:00:00');
        $results[] = new DateTime('1997-07-24 09:00:00');
        $results[] = new DateTime('1997-07-31 09:00:00');
        $results[] = new DateTime('1997-08-07 09:00:00');
        $results[] = new DateTime('1997-08-14 09:00:00');
        $results[] = new DateTime('1997-08-21 09:00:00');
        $results[] = new DateTime('1997-08-28 09:00:00');
        $results[] = new DateTime('1998-06-04 09:00:00');
        $results[] = new DateTime('1998-06-11 09:00:00');
        $results[] = new DateTime('1998-06-18 09:00:00');
        $results[] = new DateTime('1998-06-25 09:00:00');
        $results[] = new DateTime('1998-07-02 09:00:00');
        $results[] = new DateTime('1998-07-09 09:00:00');
        $results[] = new DateTime('1998-07-16 09:00:00');
        $results[] = new DateTime('1998-07-23 09:00:00');
        $results[] = new DateTime('1998-07-30 09:00:00');
        $results[] = new DateTime('1998-08-06 09:00:00');
        $results[] = new DateTime('1998-08-13 09:00:00');
        $results[] = new DateTime('1998-08-20 09:00:00');
        $results[] = new DateTime('1998-08-27 09:00:00');
        $results[] = new DateTime('1999-06-03 09:00:00');
        $results[] = new DateTime('1999-06-10 09:00:00');
        $results[] = new DateTime('1999-06-17 09:00:00');
        $results[] = new DateTime('1999-06-24 09:00:00');
        $results[] = new DateTime('1999-07-01 09:00:00');
        $results[] = new DateTime('1999-07-08 09:00:00');
        $results[] = new DateTime('1999-07-15 09:00:00');
        $results[] = new DateTime('1999-07-22 09:00:00');
        $results[] = new DateTime('1999-07-29 09:00:00');
        $results[] = new DateTime('1999-08-05 09:00:00');
        $results[] = new DateTime('1999-08-12 09:00:00');
        $results[] = new DateTime('1999-08-19 09:00:00');
        $results[] = new DateTime('1999-08-26 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19970605T090000"))
            ->freq("yearly")
            ->count(39)
            ->bymonth("6,7,8")
            ->byday('th')
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * Every four years, the first Tuesday after a Monday in November, forever (U.S. Presidential Election day):
     * DTSTART;TZID=US-Eastern:19961105T090000
     * RRULE:FREQ=YEARLY;INTERVAL=4;BYMONTH=11;BYDAY=TU;BYMONTHDAY=2,3,4,5,6,7,8
     */
    function testYearlyEight()
    {
        $results[] = new DateTime('1996-11-05 09:00:00');
        $results[] = new DateTime('2000-11-07 09:00:00');
        $results[] = new DateTime('2004-11-02 09:00:00');
        $results[] = new DateTime('2008-11-04 09:00:00');
        $results[] = new DateTime('2012-11-06 09:00:00');
        $results[] = new DateTime('2016-11-08 09:00:00');
        $results[] = new DateTime('2020-11-03 09:00:00');
        $results[] = new DateTime('2024-11-05 09:00:00');
        $results[] = new DateTime('2028-11-07 09:00:00');
        $results[] = new DateTime('2032-11-02 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19961105T090000"))
            ->freq("yearly")
            ->count(10)
            ->interval(4)
            ->bymonth(11)
            ->byday('tu')
            ->bymonthday("2,3,4,5,6,7,8")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * Every third year on the 1st, 100th, and 200th day for 10 occurrences:
     * DTSTART;TZID=America/New_York:19970101T090000
     * RRULE:FREQ=YEARLY;INTERVAL=3;COUNT=10;BYYEARDAY=1,100,200
     */
    function testYearlyNine()
    {
        $results[] = new DateTime('1997-01-01 09:00:00');
        $results[] = new DateTime('1997-04-10 09:00:00');
        $results[] = new DateTime('1997-07-19 09:00:00');
        $results[] = new DateTime('2000-01-01 09:00:00');
        $results[] = new DateTime('2000-04-09 09:00:00');
        $results[] = new DateTime('2000-07-18 09:00:00');
        $results[] = new DateTime('2003-01-01 09:00:00');
        $results[] = new DateTime('2003-04-10 09:00:00');
        $results[] = new DateTime('2003-07-19 09:00:00');
        $results[] = new DateTime('2006-01-01 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("19970101T090000"))
            ->freq("yearly")
            ->count(10)
            ->interval(3)
            ->byyearday("1,100,200")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    // this test actually should have failed,
    // I didn't set the proper start date for the calendar import
    /**
     * Every year on the -1th, -100th, and -200th day for 5 occurrences (checked via google calendar import below)
     * BEGIN:VCALENDAR
     * PRODID:-//Google Inc//Google Calendar 70.9054//EN
     * VERSION:2.0
     * CALSCALE:GREGORIAN
     * METHOD:PUBLISH
     * BEGIN:VTIMEZONE
     * TZID:America/New_York
     * X-LIC-LOCATION:America/New_York
     * BEGIN:DAYLIGHT
     * TZOFFSETFROM:-0500
     * TZOFFSETTO:-0400
     * TZNAME:EDT
     * DTSTART:19700308T020000
     * RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=2SU
     * END:DAYLIGHT
     * BEGIN:STANDARD
     * TZOFFSETFROM:-0400
     * TZOFFSETTO:-0500
     * TZNAME:EST
     * DTSTART:19701101T020000
     * RRULE:FREQ=YEARLY;BYMONTH=11;BYDAY=1SU
     * END:STANDARD
     * END:VTIMEZONE
     * BEGIN:VEVENT
     * DTSTART;VALUE=DATE:20101231
     * RRULE:FREQ=YEARLY;COUNT=5;BYYEARDAY=-1,-100,-200
     * DTSTAMP:20101231T090000
     * CREATED:20101231T090000
     * DESCRIPTION:
     * LAST-MODIFIED:20101231T090000
     * LOCATION:
     * SEQUENCE:2
     * STATUS:CONFIRMED
     * SUMMARY:testing yearly event
     * TRANSP:TRANSPARENT
     * END:VEVENT
     * END:VCALENDAR
     */
    function testYearlyTen()
    {
        $results[] = new DateTime('2010-12-31 09:00:00');
        $results[] = new DateTime('2011-06-15 09:00:00');
        $results[] = new DateTime('2011-09-23 09:00:00');
        $results[] = new DateTime('2011-12-31 09:00:00');
        $results[] = new DateTime('2012-06-15 09:00:00');

        $r = new When();
        $r->startDate(new DateTime("20101231T090000"))
            ->freq("yearly")
            ->count(5)
            ->byyearday("-1, -100, -200")
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

    /**
     * Every Sunday in January every other year at 8:30 am and 9:30 am
     * DTSTART;TZID=America/New_York:19970105T083000
     * RRULE:FREQ=YEARLY;INTERVAL=2;BYMONTH=1;BYDAY=SU;BYHOUR=8,9;BYMINUTE=30
     */
    function testYearlyEleven()
    {
        $results[] = new DateTime("1997-01-05 08:30:00");
        $results[] = new DateTime("1997-01-05 09:30:00");
        $results[] = new DateTime("1997-01-12 08:30:00");
        $results[] = new DateTime("1997-01-12 09:30:00");
        $results[] = new DateTime("1997-01-19 08:30:00");
        $results[] = new DateTime("1997-01-19 09:30:00");
        $results[] = new DateTime("1997-01-26 08:30:00");
        $results[] = new DateTime("1997-01-26 09:30:00");
        $results[] = new DateTime("1999-01-03 08:30:00");
        $results[] = new DateTime("1999-01-03 09:30:00");

        $r = new When();
        $r->startDate(new DateTime("19970105T083000"))
            ->freq("yearly")
            ->interval(2)
            ->bymonth(1)
            ->byday("su")
            ->byhour("8,9")
            ->byminute("30")
            ->count(10)
            ->generateOccurences();

        $occurences = $r->occurences;

        foreach ($results as $key => $result)
        {
            $this->assertEquals($result, $occurences[$key]);
        }
    }

}