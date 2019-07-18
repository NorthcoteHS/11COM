// Initialise Mocha/Chai.
mocha.setup('bdd');
mocha.traceIgnores = ['mocha.min.js', 'chai.min.js'];
var expect = chai.expect;
var sandbox = chai.spy.sandbox();

describe('functions', function() {
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

  describe('#hooray()', function() {
    it('should alert "Hooray!"', function() {
      hooray();
      expect(window.alert).to.have.been.called.once.with.exactly('Hooray!');
    });
  });

  describe('#subtract()', function() {
    var vals = [[100, 20], [r(0,50), r(50,100)], [r(-1000,1000,2), r(-1000,1000,2)]];

    vals.forEach(function(val) {
      var result = val[0] - val[1];
      it('should return ' + result + ' when given ' + val, function() {
        expect(subtract(val[0], val[1])).to.equal(result);
      });
    });
  });

  describe('#double()', function() {
    var vals = [5, r(0,100), r(-1000,0,2)];

    vals.forEach(function(val) {
      var result = val*2;
      it('should return ' + result + ' when given ' + val, function() {
        expect(double(val)).to.equal(val*2);
      });
    });
  });

  describe('#excited()', function() {
    var vals = ['test', s(8)];

    vals.forEach(function(val) {
      var result = val + '!';
      it('should return ' + result + ' when given ' + val, function() {
        expect(excited(val)).to.equal(result);
      });
    });
  });

  describe('#stringJoin()', function() {
    var vals = [['Hello', 'Bob'], [s(), s()]];

    vals.forEach(function(val) {
      var result = val[0] + ' ' + val[1];
      it('should return ' + result + ' when given ' + val, function() {
        expect(stringJoin(val[0], val[1])).to.equal(result);
      });
    });
  });

  describe('#birthday()', function() {
    var vals = ['Mr. Koopmans', s(8)];

    vals.forEach(function(val) {
      var result = 'Happy birthday, ' + val + '!';
      it('should alert ' + result + ' when given ' + val, function() {
        birthday(val);
        expect(window.alert).to.have.been.called.once.with.exactly(result);
      });
    });
  });

});

// Run the tests.
mocha.run();
