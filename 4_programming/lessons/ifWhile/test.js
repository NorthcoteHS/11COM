// Initialise Mocha/Chai.
mocha.setup('bdd');
mocha.traceIgnores = ['mocha.min.js', 'chai.min.js'];
var expect = chai.expect;
var sandbox = chai.spy.sandbox();

describe('ifWhile', function() {
  function r(lower, upper, digits) {
    var range = upper - lower;
    var mag = Math.pow(10, digits || 0);
    var temp = Math.random() * range + lower;
    return Math.floor(temp * mag) / mag;
  }

  function s(nChars) {
    nChars = nChars || r(1,6);
    for (var i=0, out=''; i<nChars; i++) {
      var code = r(0,2) ? r(65,91) : r(97,123);
      out += String.fromCharCode(code);
    }
    return out;
  }

  beforeEach(function() {
    sandbox.on(window, 'alert', () => 0);
    sandbox.on(console, 'log', () => 0);
  });

  afterEach(function() {
    sandbox.restore();
  });

  describe('#max()', function() {
    var vals = [[100, 20], [r(0,50), r(50,100)], [r(-1000,1000,2), r(-1000,1000,2)]];

    vals.forEach(function(val) {
      var result = Math.max(val[0], val[1]);
      it('should return ' + result + ' when given ' + val, function() {
        expect(max(val[0], val[1])).to.equal(result);
      });
    });
  });

  describe('#max3()', function() {
    var vals = [[20, 50, 80], [r(25,75), r(25,75), r(0,25)], [r(-100,100,2), r(-100,100,2), r(-100,100,2)]];

    vals.forEach(function(val) {
      var result = Math.max(val[0], val[1], val[2]);
      it('should return ' + result + ' when given ' + val, function() {
        expect(max3(val[0], val[1], val[2])).to.equal(result);
      });
    });
  });

  describe('#numToWord()', function() {
    var vals = [5, r(0,5), r(6,9)];

    vals.forEach(function(val) {
      var result = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'][val];
      it('should return ' + result + ' (or uppercase equivalent) when given ' + val, function() {
        expect(numToWord(val).toLowerCase()).to.equal(result);
      });
    });
  });

  describe('#countdown()', function() {
    var vals = [10, r(1,10)];

    vals.forEach(function(val) {
      it('should log a count down from ' + val + ' to 0', function() {
        countdown(val);
        expect(console.log).called.exactly(val+1).nth(1).with(val).and.nth(val+1).with(0);
      });
    });
  });

  describe('#halver()', function() {
    var vals = [7, r(0,5), r(6,9)];

    vals.forEach(function(val) {
      for (var result=val; result>=1; result/=2);
      it('should return ' + result + ' when given ' + val, function() {
        expect(halver(val)).to.equal(result);
      });
    });
  });

});

// Run the tests.
mocha.run();
